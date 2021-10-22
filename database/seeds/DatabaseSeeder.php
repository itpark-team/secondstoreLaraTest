<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'iPhone'],
            ['name' => 'iPad'],
            ['name' => 'Mac'],
            ['name' => 'Watch'],
        ]);

        DB::table('products')->insert([
            [
                'name' => 'iphone6',
                'description' => 'самый лудший',
                'image_path' => 'images/products/iphone6.png',
                'price' => 500,
                'rating' => 2.8,
                'category_id' => 1
            ],
            [
                'name' => 'macbook pro mid 2018',
                'description' => 'топ за свои деньги',
                'image_path' => 'images/products/macmid2018.jpg',
                'price' => 2500,
                'rating' => 4.3,
                'category_id' => 3
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'Иван',
                'email' => 'ivan@mail.ru',
                'login' => 'ivan',
                'password' => '123',
            ]
        ]);
    }
}
