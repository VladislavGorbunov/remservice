<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            'name' => 'Крупная бытовая техника',
            'description' => 'Крупная бытовая техника',
            'slug' => 'krupnaya-bytovaya-tehnika',
        ]);

        DB::table('categories')->insert([
            'name' => 'Мелкая бытовая техника',
            'description' => 'Мелкая бытовая техника',
            'slug' => 'melkaya-bytovaya-tehnika',
        ]);

        DB::table('categories')->insert([
            'name' => 'Мелкая кухонная техника',
            'description' => 'Мелкая кухонная техника',
            'slug' => 'melkaya-kuhonnaya-tehnika',
        ]);

        DB::table('categories')->insert([
            'name' => 'Компьютерная техника',
            'description' => 'Компьютерная техника',
            'slug' => 'kompyuternaya-tehnika',
        ]);

        DB::table('categories')->insert([
            'name' => 'Офисная и оргтехника',
            'description' => 'Мастера по ремонту офисной и оргтехники',
            'slug' => 'remont-ofisnoy-i-orgtehniki',
        ]);

        DB::table('categories')->insert([
            'name' => 'Климатическая техника',
            'description' => 'Мастера по ремонту климатической техники',
            'slug' => 'remont-klimaticheskoy-tehniki',
        ]);

        DB::table('categories')->insert([
            'name' => 'Электротранспорт',
            'description' => 'Мастера по ремонту электротранспорта',
            'slug' => 'remont-elektrotransporta',
        ]);

        DB::table('categories')->insert([
            'name' => 'Электроинструмент',
            'description' => 'Мастера по ремонту электроинструмента',
            'slug' => 'remont-elektroinstrumenta',
        ]);
    }
}
