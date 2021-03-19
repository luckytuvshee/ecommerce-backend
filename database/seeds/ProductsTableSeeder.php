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
            'product_name' => 'light blue dress',
            'product_brand_id' => 3,
            'product_type_id' => 10,
            'image' => '/images/product/dress1_front.jpg',
            'images' => '/images/product/dress_1_1.jpg\/images/product/dress_1_2.jpg\/images/product/dress_1_3.jpg\/images/product/dress_1_4.jpg',
            'description' => 'Тааламжтай хаврын өдрүүдэд өмсхөд тохиромжтой даашинз',
            'price' => 190000,
            'views' => 346,
        ]);

        App\Product::create([
            'product_name' => 'gorgeous booties',
            'product_brand_id' => 4,
            'product_type_id' => 7,
            'image' => '/images/product/shoe1_front.jpg',
            'images' => '/images/product/shoe1_1.jpg\/images/product/shoe1_2.jpg\/images/product/shoe1_3.jpg',
            'description' => 'Өрнөдийн загвартай энэхүү гутал нь намарын улиралд заавал өмсөх гуталын нэг юм',
            'price' => 280000,
            'views' => 800,
        ]);

        App\Product::create([
            'product_name' => 'Пүүз 1',
            'product_brand_id' => 3,
            'product_type_id' => 7,
            'image' => '/images/product/sneaker1_front.jpg',
            'images' => '/images/product/sneaker1_1.jpg\/images/product/sneaker1_3.jpg\/images/product/sneaker1_4.jpg\/images/product/sneker1_2.jpg',
            'description' => 'Эдгээр гутал нь ямар ч гадуур хувцастай зохицдог, гоёмсог сонголт юм',
            'price' => 120000,
            'views' => 1546,
        ]);

        App\Product::create([
            'product_name' => 'Цамц 1',
            'product_brand_id' => 1,
            'product_type_id' => 1,
            'image' => '/images/product/pullover1_front.jpg',
            'images' => '/images/product/pullover1_1.jpg\/images/product/pullover1_2.jpg\/images/product/pullover1_3.jpg\/images/product/pullover1_4.jpg\/images/product/pullover1_5.jpg\/images/product/pullover1_6.jpg\/images/product/pullover1_7.jpg\/images/product/pullover1_8.jpg\/images/product/pullover1_9.jpg\/images/product/pullover1_10.jpg\/images/product/pullover1_11.jpg',
            'description' => 'Энэхүү гайхамшигтай тохь тухтай, том цамц нь налгар намрын өдрүүдэд зориулагдсан',
            'price' => 165000,
            'views' => 160,
        ]);

        App\Product::create([
            'product_name' => 'Cecico брэндийн Жинсэн Хүрэм',
            'product_brand_id' => 3,
            'product_type_id' => 9,
            'image' => '/images/product/denim_jacket1_front.jpg',
            'images' => '/images/product/denim_jacket1_1.jpg\/images/product/denim_jacket1_2.jpg\/images/product/denim_jacket1_3.jpg\/images/product/denim_jacket1_4.jpg\/images/product/denim_jacket1_5.jpg\/images/product/denim_jacket1_6.jpg',
            'description' => 'Жинсэн хүрэмийг авсанаар та хэзээ ч буруудахгүй бөгөөд энэ нь хаврын улирлын төгс төгөлдөр сонголт юм',
            'price' => 180000,
            'views' => 640,
        ]);

        App\Product::create([
            'product_name' => 'Emma Rose брэндийн Цагаан жинсэн хүрэм',
            'product_brand_id' => 4,
            'product_type_id' => 9,
            'image' => '/images/product/denim_jacket2_front.jpg',
            'images' => '/images/product/denim_jacket2_1.jpg\/images/product/denim_jacket2_2.jpg\/images/product/denim_jacket2_3.jpg\/images/product/denim_jacket2_4.jpg\/images/product/denim_jacket2_5.jpg\/images/product/denim_jacket2_6.jpg',
            'description' => 'Жинсэн хүрэмийг авсанаар та хэзээ ч буруудахгүй бөгөөд энэ нь хаврын улирлын төгс төгөлдөр сонголт юм',
            'price' => 165000,
            'views' => 400,
        ]);
    }
}
