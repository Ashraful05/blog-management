<?php

namespace Database\Seeders;

use App\Models\About;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
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
            About::create([
               'title'=>$faker->title,
               'short_title'=>$faker->sentence,
               'short_description'=>$faker->text,
                'long_description'=>$faker->realText
            ]);
        }
    }
}
