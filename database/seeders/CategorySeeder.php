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
            'slug' => 'krupnaya_bitovaya_tehnika',
        ]);
    }
}
