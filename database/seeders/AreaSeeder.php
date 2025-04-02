<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    public function run(): void
    {
        $areas = [
            [
                'id' => 1,
                'name' => 'Sub-Región Brasil',
                'description' => 'Church of the Nazarene Sub-Región Brasil',
                'status' => true,
                'region_id' => 1,                
            ],
            [
                'id' => 2,
                'name' => 'Brasil Central',                
                'description' => 'Church of the Nazarene Brasil Central',
                'status' => true,
                'region_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Brasil Sur',
                'description' => 'Church of the Nazarene Brasil Sur',
                'status' => true,
                'region_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Brasil Norte',
                'description' => 'Church of the Nazarene Brasil Norte',
                'status' => true,
                'region_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Andino Central',
                'description' => 'Church of the Nazarene Andino Central',
                'status' => true,
                'region_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Andino Norte',
                'description' => 'Church of the Nazarene Andino Norte',
                'status' => true,
                'region_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Con Sur',
                'description' => 'Church of the Nazarene Con Sur',
                'status' => true,
                'region_id' => 1,
            ],
        ];
        Area::insert($areas);

    }
}
