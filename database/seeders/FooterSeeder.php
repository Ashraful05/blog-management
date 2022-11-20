<?php

namespace Database\Seeders;

use App\Models\Footer;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
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
            Footer::create([
               'contact_number'=>$faker->phoneNumber,
               'short_description'=>$faker->text,
                'address'=>$faker->country,
                'email'=>$faker->companyEmail,
                'facebook'=>'https://www.facebook.com/',
                'twitter'=>'https://twitter.com/',
                'copyright'=>$faker->domainName

            ]);
        }
    }
}
