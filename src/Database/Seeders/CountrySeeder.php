<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            [
                'id' => 1,
                'name' => 'Argentina',
                'iso_country' => 'AR',
                'iso_currency' => 'ARS',
                'status' => true,
                'icon' => '🇦🇷',
                'current_members' => 17463,
                'calling_code' => '+54',
            ],
            [
                'id' => 2,
                'name' => 'Bolivia',
                'iso_country' => 'BO',
                'iso_currency' => 'BOB',
                'status' => true,
                'icon' => '🇧🇴',
                'current_members' => 12285,
                'calling_code' => '+591',
            ],
            [
                'id' => 3,
                'name' => 'Brasil',
                'iso_country' => 'BR',
                'iso_currency' => 'BRL',
                'status' => true,
                'icon' => '🇧🇷',
                'current_members' => 131259,
                'calling_code' => '+55',
            ],
            [
                'id' => 4,
                'name' => 'Chile',
                'iso_country' => 'CL',
                'iso_currency' => 'CLP',
                'status' => true,
                'icon' => '🇨🇱',
                'current_members' => 2362,
                'calling_code' => '+56',
            ],
            [
                'id' => 5,
                'name' => 'Colombia',
                'iso_country' => 'CO',
                'iso_currency' => 'COP',
                'status' => true,
                'icon' => '🇨🇴',
                'current_members' => 18905,
                'calling_code' => '+57',
            ],
            [
                'id' => 6,
                'name' => 'Ecuador',
                'iso_country' => 'EC',
                'iso_currency' => 'USD',
                'status' => true,
                'icon' => '🇪🇨',
                'current_members' => 18484,
                'calling_code' => '+593',
            ],
            [
                'id' => 7,
                'name' => 'Paraguay',
                'iso_country' => 'PY',
                'iso_currency' => 'PYG',
                'status' => true,
                'icon' => '🇵🇾',
                'current_members' => 1848,
                'calling_code' => '+595',
            ],
            [
                'id' => 8,
                'name' => 'Perú',
                'iso_country' => 'PE',
                'iso_currency' => 'PEN',
                'status' => true,
                'icon' => '🇵🇪',
                'current_members' => 55631,
                'calling_code' => '+51',
            ],
            [
                'id' => 9,
                'name' => 'Uruguay',
                'iso_country' => 'UY',
                'iso_currency' => 'UYU',
                'status' => true,
                'icon' => '🇺🇾',
                'current_members' => 6402,
                'calling_code' => '+598',
            ],
            [
                'id' => 10,
                'name' => 'Venezuela',
                'iso_country' => 'VE',
                'iso_currency' => 'VES',
                'status' => true,
                'icon' => '🇻🇪',
                'current_members' => 9655,
                'calling_code' => '+58',
            ]
        ];
        
        Country::insert($countries);

    }
}