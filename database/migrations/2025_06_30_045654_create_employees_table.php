<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('employee_id', 15)->unique();
        $table->string('password', 230);
        $table->unsignedInteger('rules_id')->default(0);
        $table->date('joined_date')->nullable();
        $table->tinyInteger('employee_type')->default(0)
              ->comment('0 = User, 1 = Admin, 2 = HR Manager, 3 = Management');
        $table->unsignedBigInteger('id_org')->default(1);
        $table->string('firstname', 50)->nullable();
        $table->string('lastname', 50)->nullable();
        $table->string('fullname', 200)->nullable();
        $table->string('nickname', 100)->nullable();
        $table->string('nid', 200)->nullable();
        $table->enum('gender', ['Male', 'Female', 'Common'])->default('Male');
        $table->enum('marital_status', ['Single', 'Married', 'Other'])->default('Single');
        $table->date('dob')->nullable();
        $table->string('nationality', 100)->default('Bangladeshi');
        $table->string('religion', 100)->nullable();
        $table->string('blood_group', 20)->nullable();
        $table->string('pp', 230)->nullable()->comment('Profile Picture');
        $table->string('email', 200)->nullable();
        $table->string('phone', 20)->nullable();
        $table->string('extension', 10)->nullable();
        $table->boolean('is_active')->default(false);
        $table->text('notes')->nullable();
        $table->string('punch_id', 20)->nullable();
        $table->date('punch_issue')->nullable();
        $table->dateTime('last_login')->nullable();
        $table->unsignedBigInteger('user_id')->default(0);
        $table->string('ipaddress', 20)->nullable();
        $table->softDeletes();
        $table->timestamp('creationdate')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
