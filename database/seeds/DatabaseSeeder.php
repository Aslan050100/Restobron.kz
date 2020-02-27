<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
//HashtagsTableSeeder::class,ParkingsTableSeeder::class,
//HoursTableSeeder::class,KitchensTableSeeder::class,MenusTableSeeder::class,PaysTableSeeder::class,
//ProductAverageChecksTableSeeder::class
    public function run()
    {
        $this->call([
            ProductComfortsTableSeeder::class,ProductHashtagsTableSeeder::class,ProductImagesTableSeeder::class,
            ProductKitchensTableSeeder::class,ProductParkingsTableSeeder::class,ProductPaysTableSeeder::class
        ]);
    }
}
