<?php

use Illuminate\Database\Seeder;

class ProductRegistrationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\ProductRegistration::create([
            'product_id' => 1,
            'color_id' => 4,
            'size_id' => 6,
            'quantity' => 99,
            'color_image' => '/images/product_registration/dress1_cyan.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 1,
            'color_id' => 4,
            'size_id' => 5,
            'quantity' => 45,
            'color_image' => '/images/product_registration/dress1_cyan.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 2,
            'color_id' => 6,
            'size_id' => 8,
            'quantity' => 31,
            'color_image' => '/images/product_registration/shoe1_taupe.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 2,
            'color_id' => 6,
            'size_id' => 9,
            'quantity' => 19,
            'color_image' => '/images/product_registration/shoe1_taupe.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 3,
            'color_id' => 2,
            'size_id' => 8,
            'quantity' => 45,
            'color_image' => '/images/product_registration/sneaker1_black.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 3,
            'color_id' => 9,
            'size_id' => 9,
            'quantity' => 18,
            'color_image' => '/images/product_registration/sneaker1_brown.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 3,
            'color_id' => 5,
            'size_id' => 9,
            'quantity' => 35,
            'color_image' => '/images/product_registration/sneaker1_grey.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 3,
            'color_id' => 5,
            'size_id' => 8,
            'quantity' => 55,
            'color_image' => '/images/product_registration/sneaker1_grey.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 3,
            'color_id' => 9,
            'size_id' => 10,
            'quantity' => 34,
            'color_image' => '/images/product_registration/sneaker1_brown.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 4,
            'color_id' => 8,
            'size_id' => 6,
            'quantity' => 88,
            'color_image' => '/images/product_registration/pullover1_wine.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 4,
            'color_id' => 8,
            'size_id' => 5,
            'quantity' => 33,
            'color_image' => '/images/product_registration/pullover1_wine.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 5,
            'color_id' => 4,
            'size_id' => 6,
            'quantity' => 16,
            'color_image' => '/images/product_registration/denim_jacket1_cyan.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 5,
            'color_id' => 4,
            'size_id' => 5,
            'quantity' => 44,
            'color_image' => '/images/product_registration/denim_jacket1_cyan.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 6,
            'color_id' => 3,
            'size_id' => 5,
            'quantity' => 55,
            'color_image' => '/images/product_registration/denim_jacket2_white.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 6,
            'color_id' => 3,
            'size_id' => 6,
            'quantity' => 28,
            'color_image' => '/images/product_registration/denim_jacket2_white.jpg',
            'employee_id' => 3
        ]);

        App\ProductRegistration::create([
            'product_id' => 6,
            'color_id' => 3,
            'size_id' => 7,
            'quantity' => 23,
            'color_image' => '/images/product_registration/denim_jacket2_white.jpg',
            'employee_id' => 3
        ]);
    }
}
