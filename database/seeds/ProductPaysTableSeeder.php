<?php

use Illuminate\Database\Seeder;

class ProductPaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pro_pays')->insert([
        	'pro_id' => mt_rand(2,10),
        	'pay_id' => mt_rand(1,8),
        ]);
    }
}
