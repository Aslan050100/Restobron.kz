<?php

use Illuminate\Database\Seeder;

class ComfortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comforts')->insert([
        	'name'=> Str::random(20),
        	'icon' =>Str::random(10) . ".jpg",
        ]);
    }
}
