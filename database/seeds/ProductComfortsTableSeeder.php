<?php

use Illuminate\Database\Seeder;

class ProductComfortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pro_coms')->insert([
        	'pro_id' => mt_rand(1,10),
        	'comfort_id' => mt_rand(1,10),
        ]);
    }
}
