<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Church;
use App\Models\District;
use App\Faker\ChurchNameProvider;
use Faker\Factory;

class ChurchSeeder extends Seeder
{
    public function run()
    {
        $districts = District::all();
        $faker = Factory::create();
        $faker->addProvider(new ChurchNameProvider($faker));

        foreach ($districts as $district) {
            
            switch ($district->fase) {
                case 1:
                    $number = 5;
                    break;
                case 2:
                    $number = 10;
                    break;
                case 3:
                    $number = 30;
                    break;
            }

        for ($i = 0; $i < $number; $i++) {
                Church::create([
                    'name' => $faker->churchName(),
                    'description' => $faker->sentence,
                    'district_id' => $district->id,
                ]);
            }
        }
    }
}
