<?php

use Illuminate\Database\Seeder;

class ProductAverageChecksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pro_aves')->insert([
        	'pro_id' => mt_rand(1,10),
        	'average_id' => mt_rand(1,10),
        ]);
    }
}
