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
        // Жимс, ногоо
        App\ProductType::create([
            'type_group_id' => 1,
            'type_name' => 'Жимс',
        ]);

        App\ProductType::create([
            'type_group_id' => 1,
            'type_name' => 'Хатаасан жимс',
        ]);

        App\ProductType::create([
            'type_group_id' => 1,
            'type_name' => 'Хөлдөөсөн жимс',
        ]);

        // Өдөр тутмын хүнс
        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Сүү',
        ]);

        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Тараг, аарц',
        ]);
        
        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Өрөм, зөөхий, ааруул',
        ]);

        App\ProductType::create([
            'type_group_id' => 2,
            'type_name' => 'Цөцгийн тос',
        ]);

        // Талх, нарин боов
        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Талх',
        ]);

        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Нарийн боов',
        ]);

        App\ProductType::create([
            'type_group_id' => 3,
            'type_name' => 'Кекс, бейкэри',
        ]);

        // Чихэр, шоколад
        App\ProductType::create([
            'type_group_id' => 4,
            'type_name' => 'Шоколад',
        ]);

        App\ProductType::create([
            'type_group_id' => 4,
            'type_name' => 'Набор',
        ]);

        // Ус, ундаа, жүүс
        App\ProductType::create([
            'type_group_id' => 5,
            'type_name' => 'Ус',
        ]);

        App\ProductType::create([
            'type_group_id' => 5,
            'type_name' => 'Ундаа',
        ]);

        App\ProductType::create([
            'type_group_id' => 5,
            'type_name' => 'Жүүс',
        ]);
        
        App\ProductType::create([
            'type_group_id' => 5,
            'type_name' => 'Цай, кофе',
        ]);
    }
}
