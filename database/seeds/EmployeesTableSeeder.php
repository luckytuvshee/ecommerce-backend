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
            'email' => 'superadmin@test.com',
            'last_name' => 'Doe',
            'first_name' => 'John',
            'mobile_number' => '99999999',
            'employee_type_id' => 1,
            'password' => Hash::make('12121212')
        ]);

        // System manager
        App\Employee::create([
            'email' => 'joe@test.com',
            'last_name' => 'Poe',
            'first_name' => 'Joe',
            'mobile_number' => '88889999',
            'employee_type_id' => 2,
            'password' => Hash::make('12121212')
        ]);

        // Warehouse Clerk
        App\Employee::create([
            'email' => 'jane@test.com',
            'last_name' => 'Doe',
            'first_name' => 'Jane',
            'mobile_number' => '89988888',
            'employee_type_id' => 3,
            'password' => Hash::make('12121212')
        ]);

        App\Employee::create([
            'email' => 'amy@test.com',
            'last_name' => 'Winehouse',
            'first_name' => 'Amy',
            'mobile_number' => '99990099',
            'employee_type_id' => 3,
            'password' => Hash::make('12121212')
        ]);

        // Shipper
        App\Employee::create([
            'email' => 'tom@test.com',
            'last_name' => 'Hardy',
            'first_name' => 'Tom',
            'mobile_number' => '88889900',
            'employee_type_id' => 4,
            'password' => Hash::make('12121212')
        ]);

        App\Employee::create([
            'email' => 'nancy@test.com',
            'last_name' => 'Williams',
            'first_name' => 'Nancy',
            'mobile_number' => '88889988',
            'employee_type_id' => 4,
            'password' => Hash::make('12121212')
        ]);
    }
}
