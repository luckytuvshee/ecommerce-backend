<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Product::create([
            'product_name' => 'Алим улаан Белги 1кг',
            'product_type_id' => 1,
            'image' => '/images/product/apple_red_belgium_front.jpg',
            'images' => '/images/product/apple_red_belgium_1.jpg\/images/product/apple_red_belgium_1.jpg',
            'description' => '',
            'price' => 10940,
            'views' => 346,
            'quantity' => 100,
        ]);

        App\Product::create([
            'product_name' => 'Ногоон алим америк 1кг',
            'product_type_id' => 1,
            'image' => '/images/product/apple_green_america_front.png',
            'images' => '/images/product/apple_green_america_1.png\/images/product/apple_green_america_2.png',
            'description' => '',
            'price' => 16000,
            'views' => 800,
            'quantity' => 200,
        ]);

        App\Product::create([
            'product_name' => 'Pink lady Улаан алим 1кг',
            'product_type_id' => 1,
            'image' => '/images/product/pink_lady_apple_red_front.jpg',
            'images' => '/images/product/pink_lady_apple_red_1.jpg\/images/product/pink_lady_apple_red_1.jpg',
            'description' => '',
            'price' => 10700,
            'views' => 1546,
            'quantity' => 1000,
        ]);

        App\Product::create([
            'product_name' => 'Холимог самар 1кг',
            'product_type_id' => 2,
            'image' => '/images/product/mixed_nuts_1_front.jpg',
            'images' => '/images/product/mixed_nuts_1_1.jpg\/images/product/mixed_nuts_1_2.jpg',
            'description' => '',
            'price' => 42000,
            'views' => 160,
            'quantity' => 500,
        ]);

        App\Product::create([
            'product_name' => 'Цангис 1кг',
            'product_type_id' => 2,
            'image' => '/images/product/tsangis_front.png',
            'images' => '/images/product/tsangis_1.png\/images/product/tsangis_2.png',
            'description' => '',
            'price' => 35000,
            'views' => 640,
            'quantity' => 400,
        ]);

        App\Product::create([
            'product_name' => 'Холимог самар 300гр',
            'product_type_id' => 2,
            'image' => '/images/product/mixed_nuts_2_front.jpg',
            'images' => '/images/product/mixed_nuts_2_1.jpg\/images/product/mixed_nuts_2_2.jpg',
            'description' => '',
            'price' => 12600,
            'views' => 400,
            'quantity' => 900,
        ]);
    }
}
