<?php

use Illuminate\Database\Seeder;

class SpotsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        App\SpotCategory::create([
        	"name"=>"Street Spot"
        ]);

		App\SpotCategory::create([
			"name"=>"Skatepark"
		]);
       
		App\SpotCategory::create([
			"name"=>"Bowl"
		]);

    }
}
