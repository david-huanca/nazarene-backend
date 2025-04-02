<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Nazarene\Backend\Models\Member;
use Nazarene\Backend\Models\Church;
use Nazarene\Backend\Models\Ministry;

class MemberSeeder extends Seeder
{
    public function run()
    {
        $members = [
            [
                'name' => 'Juan Pérez',
                'email' => 'juan@example.com',
                'phone' => '123456789',
                'church_name' => 'Iglesia Central',
                'ministry_name' => 'Alabanza',
            ],
            [
                'name' => 'María García',
                'email' => 'maria@example.com',
                'phone' => '987654321',
                'church_name' => 'Iglesia del Norte',
                'ministry_name' => 'Jóvenes',
            ],
        ];

        foreach ($members as $member) {
            $church = Church::where('name', $member['church_name'])->first();
            $ministry = Ministry::where('name', $member['ministry_name'])->first();

            if ($church && $ministry) {
                Member::create([
                    'name' => $member['name'],
                    'email' => $member['email'],
                    'phone' => $member['phone'],
                    'church_id' => $church->id,
                    'ministry_id' => $ministry->id,
                ]);
            }
        }
    }
} 