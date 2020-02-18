<?php

use Illuminate\Database\Seeder;

class ProductParkingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pro_parkings')->insert([
        	'pro_id' => mt_rand(1,10),
        	'parking_id' => mt_rand(1,10),
        ]);
    }
}
