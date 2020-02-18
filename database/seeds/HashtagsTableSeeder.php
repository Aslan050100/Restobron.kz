<?php

use Illuminate\Database\Seeder;

class HashtagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hashtags')->insert([
        	'name' => Str::random(10),
        ]);
    }
}
