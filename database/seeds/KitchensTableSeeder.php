<?php

use Illuminate\Database\Seeder;

class KitchensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kitchens')->insert([
        	'name' => Str::random(10),
        ]);
    }
}
