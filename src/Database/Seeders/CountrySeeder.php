<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Nazarene\Backend\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'name' => 'Bolivia',
                'code' => 'BO',
                'phone_code' => '591',
            ],
            [
                'name' => 'Perú',
                'code' => 'PE',
                'phone_code' => '51',
            ],
            [
                'name' => 'Chile',
                'code' => 'CL',
                'phone_code' => '56',
            ],
            [
                'name' => 'Argentina',
                'code' => 'AR',
                'phone_code' => '54',
            ],
            [
                'name' => 'Brasil',
                'code' => 'BR',
                'phone_code' => '55',
            ],
            [
                'name' => 'Paraguay',
                'code' => 'PY',
                'phone_code' => '595',
            ],
            [
                'name' => 'Uruguay',
                'code' => 'UY',
                'phone_code' => '598',
            ],
            [
                'name' => 'Colombia',
                'code' => 'CO',
                'phone_code' => '57',
            ],
            [
                'name' => 'Ecuador',
                'code' => 'EC',
                'phone_code' => '593',
            ],
            [
                'name' => 'Venezuela',
                'code' => 'VE',
                'phone_code' => '58',
            ],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
} 