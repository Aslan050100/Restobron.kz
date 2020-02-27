<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_images')->insert([
            'image' => Str::random(10)  . ".jpg",
            'pro_id' =>mt_rand(2,11),
        ]);
    }
}
