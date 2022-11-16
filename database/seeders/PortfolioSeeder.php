<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
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
            Portfolio::create([
               'portfolio_name'=>$faker->name,
               'portfolio_title'=>$faker->title,
               'portfolio_description'=>$faker->text,
            ]);
        }
    }
}
