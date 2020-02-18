<?php

use Illuminate\Database\Seeder;

class DishTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('dish_types')->insert([
        	'name' => Str::random(10),
        ]);
    }
}
