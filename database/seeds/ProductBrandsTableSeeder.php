<?php

use Illuminate\Database\Seeder;

class ProductBrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ProductBrand::create([
            'brand_name' => 'Sugar mint',
        ]);

        App\ProductBrand::create([
            'brand_name' => 'Si style',
        ]);

        App\ProductBrand::create([
            'brand_name' => 'Cecico',
        ]);

        App\ProductBrand::create([
            'brand_name' => 'Emma rose',
        ]);

        App\ProductBrand::create([
            'brand_name' => 'SassyBling',
        ]);
    }
}
