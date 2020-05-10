<?php

use Illuminate\Database\Seeder;

class SaleChartForMonths extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sales')->insert([
            'price' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
