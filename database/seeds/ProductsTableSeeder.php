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
            'seats' =>mt_rand(100,500),
            'rating' =>mt_rand(1,10),
            'hall_id' =>mt_rand(1,9),
            'city_id' =>mt_rand(1,1),
            'map'=>Str::random(20),
        ]);
    }
}
