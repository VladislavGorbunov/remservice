<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            'name' => 'Стиральные машины',
            'description' => 'Мастера по ремонту стиральных машин на дому',
            'slug' => 'remont-stiralnyh-mashin',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Посудомоечные машины',
            'description' => 'Мастера по ремонту посудомоечных машин на дому',
            'slug' => 'remont-posudomoechnyh-mashin',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Сушильные машины',
            'description' => 'Мастера по ремонту сушильных машин на дому',
            'slug' => 'remont-sushilnyh-mashin',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Холодильники',
            'description' => 'Мастера по ремонту холодильников на дому',
            'slug' => 'remont-holodilnikov',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Электроплиты',
            'description' => 'Мастера по ремонту электроплит на дому',
            'slug' => 'remont-elektroplit',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Варочные панели',
            'description' => 'Мастера по ремонту варочных панелей на дому',
            'slug' => 'remont-varochnyh-paneley',
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Духовые шкафы',
            'description' => 'Мастера по ремонту духовых шкафов на дому',
            'slug' => 'remont-duhovyh-shkafov',
            'category_id' => 1
        ]);
    }
}
