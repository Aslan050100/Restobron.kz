<?php

use Illuminate\Database\Seeder;

class ProductKitchensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pro_kits')->insert([
        	'pro_id' => mt_rand(2,11),
        	'kitchen_id' => mt_rand(1,8),
        ]);
    }
}
