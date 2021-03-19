<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductBrandsTableSeeder::class,
            ProductTypeGroupsTableSeeder::class,
            ProductTypesTableSeeder::class,
            ColorsTableSeeder::class,
            SizesTableSeeder::class,
            ProductsTableSeeder::class,
            EmployeeTypesTableSeeder::class,
            EmployeesTableSeeder::class,
            UsersTableSeeder::class,
            ProductRegistrationsTableSeeder::class,
            CitiesTableSeeder::class,
            DistrictsTableSeeder::class,
            SubdistrictsTableSeeder::class,
            AddressesTableSeeder::class,
            OrderStatusesTableSeeder::class,
        ]);
    }
}
