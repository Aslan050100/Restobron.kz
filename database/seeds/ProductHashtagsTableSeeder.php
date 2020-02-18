<?php

use Illuminate\Database\Seeder;

class ProductHashtagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pro_hashes')->insert([
        	'pro_id' => mt_rand(1,10),
        	'hashtag_id' => mt_rand(1,10),
        ]);
    }
}
