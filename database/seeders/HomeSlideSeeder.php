<?php

namespace Database\Seeders;

use App\Models\HomeSlide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class HomeSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=1;$i<=5;$i++)
        {
            HomeSlide::create([
               'title'=>$faker->title,
                'short_title'=>$faker->sentence(),
            ]);
        }
    }
}
