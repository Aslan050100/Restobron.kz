<?php

use Illuminate\Database\Seeder;

class AverageChecksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('average_checks')->insert([
        	'price' => mt_rand(3000,10000),
        ]);
    }
}
