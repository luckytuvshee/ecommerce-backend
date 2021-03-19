<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Size::create([
            'size' => 'XXS',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => 'XS',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => 'S',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => 'M',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => 'L',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => 'XL',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => 'XXL',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '35',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '36',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '37',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '38',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '39',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '40',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '41',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '42',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '43',
            'country' => 'Америк',
        ]);

        App\Size::create([
            'size' => '43.5',
            'country' => 'Америк',
        ]);
    }
}

