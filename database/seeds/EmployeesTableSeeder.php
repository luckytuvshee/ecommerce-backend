<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Super admin
        App\Employee::create([
            'email' => 'superadmin@myshop.com',
            'last_name' => 'John',
            'first_name' => 'Doe',
            'mobile_number' => '99999999',
            'employee_type_id' => 1,
            'profile_image' => '/images/employee/default_profile_image.png',
            'password' => Hash::make('12121212')
        ]);

        // System manager
        App\Employee::create([
            'email' => 'betty@myshop.com',
            'last_name' => 'Smith',
            'first_name' => 'Betty',
            'mobile_number' => '88889999',
            'employee_type_id' => 2,
            'profile_image' => '/images/employee/default_profile_image.png',
            'password' => Hash::make('12121212')
        ]);

        // Warehouse Clerk
        App\Employee::create([
            'email' => 'maria@myshop.com',
            'last_name' => 'Hernandez',
            'first_name' => 'Maria',
            'mobile_number' => '89988888',
            'employee_type_id' => 3,
            'profile_image' => '/images/employee/default_profile_image.png',
            'password' => Hash::make('12121212')
        ]);

        App\Employee::create([
            'email' => 'ashley@myshop.com',
            'last_name' => 'Rosa',
            'first_name' => 'Ashley',
            'mobile_number' => '99990099',
            'employee_type_id' => 3,
            'profile_image' => '/images/employee/default_profile_image.png',
            'password' => Hash::make('12121212')
        ]);

        // Shipper
        App\Employee::create([
            'email' => 'scarlet@myshop.com',
            'last_name' => 'Johansson',
            'first_name' => 'Scarlet',
            'mobile_number' => '88889900',
            'employee_type_id' => 4,
            'profile_image' => '/images/employee/default_profile_image.png',
            'password' => Hash::make('12121212')
        ]);

        App\Employee::create([
            'email' => 'cooper@myshop.com',
            'last_name' => 'Bradley',
            'first_name' => 'Cooper',
            'mobile_number' => '88889988',
            'employee_type_id' => 4,
            'profile_image' => '/images/employee/default_profile_image.png',
            'password' => Hash::make('12121212')
        ]);
    }
}
