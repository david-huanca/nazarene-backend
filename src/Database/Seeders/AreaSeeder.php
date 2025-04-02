<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Nazarene\Backend\Models\Area;
use Nazarene\Backend\Models\Region;

class AreaSeeder extends Seeder
{
    public function run()
    {
        $areas = [
            [
                'name' => 'Bolivia',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Perú',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Chile',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Argentina',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Brasil',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Paraguay',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Uruguay',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Colombia',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Venezuela',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Ecuador',
                'region_name' => 'Sudamérica',
            ],
            [
                'name' => 'Panamá',
                'region_name' => 'Centroamérica',
            ],
            [
                'name' => 'Costa Rica',
                'region_name' => 'Centroamérica',
            ],
            [
                'name' => 'Nicaragua',
                'region_name' => 'Centroamérica',
            ],
            [
                'name' => 'Honduras',
                'region_name' => 'Centroamérica',
            ],
            [
                'name' => 'El Salvador',
                'region_name' => 'Centroamérica',
            ],
            [
                'name' => 'Guatemala',
                'region_name' => 'Centroamérica',
            ],
            [
                'name' => 'México',
                'region_name' => 'Centroamérica',
            ],
            [
                'name' => 'Cuba',
                'region_name' => 'Caribe',
            ],
            [
                'name' => 'República Dominicana',
                'region_name' => 'Caribe',
            ],
            [
                'name' => 'Puerto Rico',
                'region_name' => 'Caribe',
            ],
        ];

        foreach ($areas as $area) {
            $region = Region::where('name', $area['region_name'])->first();
            if ($region) {
                Area::create([
                    'name' => $area['name'],
                    'region_id' => $region->id,
                ]);
            }
        }
    }
} 