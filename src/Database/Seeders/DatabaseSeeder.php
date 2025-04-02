<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            RegionSeeder::class,
            AreaSeeder::class,
            DistrictSeeder::class,
            ChurchSeeder::class,
            MinistrySeeder::class,
            MemberSeeder::class,
        ]);
    }
} 