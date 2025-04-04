<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nazarene\Backend\Models\Ministry;
use Faker\Factory;

class MinistrySeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $ministries = ['MNI', 'DNI', 'JNI', 'Evangelismo', 'MNC', 'MAM'];
        $status = true;
        foreach ($ministries as $ministry) {
            Ministry::create(['name' => $ministry, 'description' => $faker->sentence, 'status' => $status]);
        }
    }
}
