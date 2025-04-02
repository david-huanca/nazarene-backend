<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Nazarene\Backend\Models\Church;
use Nazarene\Backend\Models\District;

class ChurchSeeder extends Seeder
{
    public function run()
    {
        $churches = [
            [
                'name' => 'Iglesia Central',
                'district_name' => 'La Paz',
            ],
            [
                'name' => 'Iglesia del Norte',
                'district_name' => 'La Paz',
            ],
            [
                'name' => 'Iglesia del Sur',
                'district_name' => 'La Paz',
            ],
            [
                'name' => 'Iglesia del Este',
                'district_name' => 'La Paz',
            ],
            [
                'name' => 'Iglesia del Oeste',
                'district_name' => 'La Paz',
            ],
            [
                'name' => 'Iglesia Central',
                'district_name' => 'Cochabamba',
            ],
            [
                'name' => 'Iglesia del Norte',
                'district_name' => 'Cochabamba',
            ],
            [
                'name' => 'Iglesia del Sur',
                'district_name' => 'Cochabamba',
            ],
            [
                'name' => 'Iglesia del Este',
                'district_name' => 'Cochabamba',
            ],
            [
                'name' => 'Iglesia del Oeste',
                'district_name' => 'Cochabamba',
            ],
        ];

        foreach ($churches as $church) {
            $district = District::where('name', $church['district_name'])->first();
            if ($district) {
                Church::create([
                    'name' => $church['name'],
                    'district_id' => $district->id,
                ]);
            }
        }
    }
} 