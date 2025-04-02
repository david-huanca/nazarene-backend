<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Nazarene\Backend\Models\District;
use Nazarene\Backend\Models\Area;

class DistrictSeeder extends Seeder
{
    public function run()
    {
        $districts = [
            [
                'name' => 'La Paz',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Cochabamba',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Santa Cruz',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Oruro',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Potosí',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Chuquisaca',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Tarija',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Beni',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Pando',
                'area_name' => 'Bolivia',
            ],
            [
                'name' => 'Lima',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Arequipa',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Cusco',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Trujillo',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Chiclayo',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Huancayo',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Piura',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Iquitos',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Cajamarca',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Pucallpa',
                'area_name' => 'Perú',
            ],
            [
                'name' => 'Tacna',
                'area_name' => 'Perú',
            ],
        ];

        foreach ($districts as $district) {
            $area = Area::where('name', $district['area_name'])->first();
            if ($area) {
                District::create([
                    'name' => $district['name'],
                    'area_id' => $area->id,
                ]);
            }
        }
    }
} 