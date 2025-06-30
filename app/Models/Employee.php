<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use Notifiable;

    protected $table = 'employees';

    protected $fillable = [
        'employee_id',
        'password',
        'rules_id',
        'joined_date',
        'employee_type',
        'id_org',
        'firstname',
        'lastname',
        'fullname',
        'nickname',
        'nid',
        'gender',
        'marital_status',
        'dob',
        'nationality',
        'religion',
        'blood_group',
        'pp',
        'email',
        'phone',
        'extension',
        'is_active',
        'notes',
        'punch_id',
        'punch_issue',
        'last_login',
        'user_id',
        'ipaddress',
        'creationdate',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'joined_date' => 'date',
        'dob' => 'date',
        'punch_issue' => 'date',
        'last_login' => 'datetime',
        'creationdate' => 'datetime',
        'is_active' => 'boolean',
    ];
}
