<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
        	'name' => Str::random(10),
        	'price' => mt_rand(1000,25000),
        	'description' => Str::random(30),
        	'pro_id'=>mt_rand(2,11),
        	'dish_type_id'=>mt_rand(1,8),
        ]);
    }
}
