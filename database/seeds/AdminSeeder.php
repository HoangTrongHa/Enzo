<?php

use App\Role;
use Illuminate\Database\Seeder;
use App\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("123456789"),
            "role" => 5
        ]);
        $role_employee = Role::where('name', 'employee')->first();
        $role_manager  = Role::where('name', 'admin')->first();
        $role_saler = Role::where('name', 'saler')->first();

        $employee = new User();
        $employee->name = '123';
        $employee->email = 'manager.com';
        $employee->password = bcrypt('123456789');
        $employee->save();
        $employee->roles()->attach($role_manager);

        $employee = new User();
        $employee->name = '123';
        $employee->email = 'saler.com';
        $employee->password = bcrypt('123456789');
        $employee->save();
        $employee->roles()->attach($role_saler);

        $employee = new User();
        $employee->name = 'employee';
        $employee->email = '12345.com';
        $employee->password = bcrypt('123456789');
        $employee->save();
        $employee->roles()->attach($role_employee);

    }
}
