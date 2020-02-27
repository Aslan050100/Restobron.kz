<?php

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('feedbacks')->insert([
        	'comment' => Str::random(20),
        	'image'=>Str::random(10).".jpg",
        	'pro_id'=>mt_rand(1,8),
        	'user_id'=>mt_rand(1,1),

        ]);
    }
}
