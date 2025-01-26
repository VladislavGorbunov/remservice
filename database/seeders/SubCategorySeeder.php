<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Крупная бытовая техника
        DB::table('subcategories')->insert([
            'name' => 'Стиральные машины',
            'description' => 'Мастера по ремонту стиральных машин на дому',
            'slug' => 'remont-stiralnyh-mashin',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Посудомоечные машины',
            'description' => 'Мастера по ремонту посудомоечных машин на дому',
            'slug' => 'remont-posudomoechnyh-mashin',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Сушильные машины',
            'description' => 'Мастера по ремонту сушильных машин на дому',
            'slug' => 'remont-sushilnyh-mashin',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Холодильники',
            'description' => 'Мастера по ремонту холодильников на дому',
            'slug' => 'remont-holodilnikov',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Электроплиты',
            'description' => 'Мастера по ремонту электроплит на дому',
            'slug' => 'remont-elektroplit',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Варочные панели',
            'description' => 'Мастера по ремонту варочных панелей на дому',
            'slug' => 'remont-varochnyh-paneley',
            'category_id' => 1
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Духовые шкафы',
            'description' => 'Мастера по ремонту духовых шкафов на дому',
            'slug' => 'remont-duhovyh-shkafov',
            'category_id' => 1
        ]);

        // Мелкая бытовая техника
        DB::table('subcategories')->insert([
            'name' => 'Роботы-пылесосы',
            'description' => 'Мастера по ремонту роботов-пылесосов на дому',
            'slug' => 'remont-robotov-pylesosov',
            'category_id' => 2
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Пылесосы',
            'description' => 'Мастера по ремонту пылесосов на дому',
            'slug' => 'remont-pylesosov',
            'category_id' => 2
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Утюги',
            'description' => 'Мастера по ремонту утюгов на дому',
            'slug' => 'remont-utyugov',
            'category_id' => 2
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Парогенераторы',
            'description' => 'Мастера по ремонту парогенераторов на дому',
            'slug' => 'remont-parogeneratorov',
            'category_id' => 2
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Гладильные системы',
            'description' => 'Мастера по ремонту гладильных систем на дому',
            'slug' => 'remont-gladilnyh-sistem',
            'category_id' => 2
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Отпариватели и пароочистители',
            'description' => 'Мастера по ремонту отпаривателей и пароочистителей на дому',
            'slug' => 'remont-otparivateley-i-paroochistiteley',
            'category_id' => 2
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Электрошвабры и электровеники',
            'description' => 'Мастера по ремонту электрошвабр и электровеников на дому',
            'slug' => 'remont-elektroshvabr-i-elektrovenikov',
            'category_id' => 2
        ]);

        // Мелкая кухонная техника
        DB::table('subcategories')->insert([
            'name' => 'Кофемашины',
            'description' => 'Мастера по ремонту кофемашин на дому',
            'slug' => 'remont-kofemashin',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Блендеры',
            'description' => 'Мастера по ремонту блендеров на дому',
            'slug' => 'remont-blenderov',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Мясорубки',
            'description' => 'Мастера по ремонту мясорубок на дому',
            'slug' => 'remont-myasorubok',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Кухонные комбайны',
            'description' => 'Мастера по ремонту кухонных комбайнов на дому',
            'slug' => 'remont-kuhonnyh-kombaynov',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Миксеры',
            'description' => 'Мастера по ремонту миксеров на дому',
            'slug' => 'remont-mikserov',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Чайники',
            'description' => 'Мастера по ремонту чайников на дому',
            'slug' => 'remont-chaynikov',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Мультиварки',
            'description' => 'Мастера по ремонту мультиварок на дому',
            'slug' => 'remont-multivarok',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Хлебопечи',
            'description' => 'Мастера по ремонту хлеборечек на дому',
            'slug' => 'remont-hlebopechek',
            'category_id' => 3
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Термоподы',
            'description' => 'Мастера по ремонту термоподов на дому',
            'slug' => 'remont-termopodov',
            'category_id' => 3
        ]);

        // Компьютерная техника
    }
}
