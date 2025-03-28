<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'avatar' => 'avatars/no-avatar.png',
            'name' => 'Владислав',
            'lastname' => 'Горбунов',
            'email' => 'limitorg2016@yandex.ru',
            'password' => Hash::make('Vadya2011!'),
            'region_id' => 1,
            'phone' => '+79119204952',
            'phone_verify' => 1,
            'experience' => 0,
            'isAdmin' => 1
        ]);
    }
}
