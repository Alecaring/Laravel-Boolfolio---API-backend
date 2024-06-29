<?php

namespace Database\Seeders;

use App\Models\Website;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('it_IT');

        for ($i=0; $i < 20; $i++) { 
            Website::create([
                'title'         => $faker->company(),
                'description'   => $faker->realText(),
                'themplate'     => $faker->phoneNumber(),
                'username_owner'=> $faker->firstNameMale(),
                'vote'          => $faker->postcode(),
                'power_vote'    => $faker->postcode(),                
            ]);
        }
    }
}
