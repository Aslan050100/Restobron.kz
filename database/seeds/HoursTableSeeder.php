<?php

use Illuminate\Database\Seeder;

class HoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hours')->insert([
            'monday' => "07:00 a.m - 01:00 a.m",
            'tuesday' => "07:00 a.m - 01:00 a.m",
            'wednesday' => "07:00 a.m - 01:00 a.m",
            'thursday' => "07:00 a.m - 01:00 a.m",
            'friday' => "07:00 a.m - 01:00 a.m",
            'saturday' => "07:00 a.m - 01:00 a.m",
            'sunday' => "07:00 a.m - 01:00 a.m",
            'pro_id' =>mt_rand(1,8),
        ]);
    }
}
