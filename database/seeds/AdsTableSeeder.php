<?php

use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ads')->insert([
        	'name'=> Str::random(20),
        	'description' =>Str::random(30),
        	'image'=>Str::random(10) . ".jpg",
        	'pro_id' => mt_rand(1,8),
        ]);
    }
}
