<?php

use Illuminate\Database\Seeder;

class HallDescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hall_descriptions')->insert([
        	'name' => Str::random(10),
        ]);
    }
}
