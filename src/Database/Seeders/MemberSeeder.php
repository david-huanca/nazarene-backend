<?php

namespace Nazarene\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\Church;
use App\Models\Ministry;

class MemberSeeder extends Seeder
{
    public function run()
    {        


        $members = Member::factory(100)->create(); // Crea 10 miembros

        $ministries = Ministry::all(); // Obtiene todos los ministerios

        foreach ($members as $member) {
            // Asigna 2 ministerios aleatoriamente
            $member->ministries()->attach(
                $ministries->random(2)->pluck('id')->toArray()
            );
        }
    }
}