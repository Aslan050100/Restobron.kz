<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ 
        	UsersTableSeeder::class,
        	ProductsTableSeeder::class,
        	ProductImagesTableSeeder::class,
        	ComfortsTableSeeder::class,
        	AdsTableSeeder::class,
        	AverageChecksTableSeeder::class,
        	DishTypesTableSeeder::class,
        	FeedbacksTableSeeder::class,
        	HashtagsTableSeeder::class,
        	KitchensTableSeeder::class,
        	MenusTableSeeder::class,
        	PaysTableSeeder::class,
        	ParkingsTableSeeder::class,
        	HallDescriptionsTableSeeder::class,
        	ProductPaysTableSeeder::class,
        	ProductAverageChecksTableSeeder::class,
        	ProductComfortsTableSeeder::class,
        	ProductHashtagsTableSeeder::class,
        	ProductKitchensTableSeeder::class,
        	ProductParkingsTableSeeder::class,
        	
        ]);
    }
}
