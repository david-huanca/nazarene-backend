<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Nazarene\Backend\Models\Region;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $regions = [
            [
                'name' => 'Sudamérica',
                'isSubRegion' => false,
            ],
            [
                'name' => 'Centroamérica',
                'isSubRegion' => false,
            ],
            [
                'name' => 'Caribe',
                'isSubRegion' => false,
            ],
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
} 