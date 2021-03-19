<?php

use Illuminate\Database\Seeder;

class ProductTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Цамц
        App\ProductType::create([
            'type_group_id' => 1,
            'type_name' => 'Нимгэн цамц',
        ]);

        App\ProductType::create([
            'type_group_id' => 1,
            'type_name' => 'Малгаатай цамц',
        ]);

        App\ProductType::create([
            'type_group_id' => 1,
            'type_name' => 'Сорочка',
        ]);

        App\ProductType::create([
            'type_group_id' => 1,
            'type_name' => 'Малгаагүй цамц',
        ]);

        // Өмд
        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Бариу өмд',
        ]);

        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Сул өмд',
        ]);
        
        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Нимгэн сул өмд',
        ]);

        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Жинсэн өмд',
        ]);

        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Биеийн тамирын өмд',
        ]);

        // Гутал
        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Пүүз',
        ]);

        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Кет',
        ]);

        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Углааш',
        ]);

        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Өсгийтэй гутал',
        ]);

        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Таавчик',
        ]);

        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Өвлийн гутал',
        ]);

        // Гадуур хувцас
        App\ProductType::create([
            'type_group_id' => 4,
            'type_name' => 'Хүрэм',
        ]);

        App\ProductType::create([
            'type_group_id' => 4,
            'type_name' => 'Цув',
        ]);

        App\ProductType::create([
            'type_group_id' => 4,
            'type_name' => 'Өвлийн куртка',
        ]);

        App\ProductType::create([
            'type_group_id' => 4,
            'type_name' => 'Платье',
        ]);

        App\ProductType::create([
            'type_group_id' => 4,
            'type_name' => 'Даашинз',
        ]);

        // Дотуур хувцас
        App\ProductType::create([
            'type_group_id' => 5,
            'type_name' => 'Левчик',
        ]);

        App\ProductType::create([
            'type_group_id' => 5,
            'type_name' => 'Трусикс',
        ]);

        App\ProductType::create([
            'type_group_id' => 5,
            'type_name' => 'Унтлагын цамц',
        ]);
    }
}
