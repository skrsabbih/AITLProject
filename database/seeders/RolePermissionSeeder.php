<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Employee;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Define roles
        $roles = ['User', 'Admin', 'HR Manager', 'Management'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        // Define permissions
        $permissions = [
            'view employees',
            'create employees',
            'edit employees',
            'delete employees',
            'manage roles'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign all permissions to Admin
        $adminRole = Role::where('name', 'Admin')->first();
        $adminRole->syncPermissions(Permission::all());

        // Give HR Manager some permissions
        $hrRole = Role::where('name', 'HR Manager')->first();
        $hrRole->syncPermissions([
            'view employees',
            'create employees',
            'edit employees',
        ]);

        // Assign a default employee to Admin role (optional)
        $employee = Employee::first();
        if ($employee) {
            $employee->assignRole('Admin');
        }
    }
}
