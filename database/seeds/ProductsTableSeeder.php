<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => Str::random(10),
            'description' => Str::random(30),
            'phone_number' => mt_rand(100000, 999999),
            'address' =>Str::random(10),
            'data_open' => Str::random(6),
            'seats' =>mt_rand(100,500),
            'video' =>Str::random(10),
            'rating' =>mt_rand(1,10),
            'hall_id' =>mt_rand(1,6),
            'city_id' =>mt_rand(1,6),
            'map'=>Str::random(20),
        ]);
    }
}
