<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Color::create([
            'color' => 'Ягаан',
        ]);

        App\Color::create([
            'color' => 'Хар',
        ]);

        App\Color::create([
            'color' => 'Цагаан',
        ]);

        App\Color::create([
            'color' => 'Цайвар цэнхэр',
        ]);

        App\Color::create([
            'color' => 'Саарал',
        ]);

        // Taupe
        App\Color::create([
            'color' => 'Бор саарал',
        ]);

        // Ivory
        App\Color::create([
            'color' => 'Зэв',
        ]);

        App\Color::create([
            'color' => 'Хүрэн',
        ]);

        App\Color::create([
            'color' => 'Бор',
        ]);
    }
}
