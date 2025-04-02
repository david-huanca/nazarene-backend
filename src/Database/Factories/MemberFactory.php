<?php

namespace Nazarene\Backend\Database\Factories;

use Nazarene\Backend\Models\Church;
use Nazarene\Backend\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class MemberFactory extends Factory
{
    protected $model = Member::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'password' => Hash::make('password'),
            'status' => $this->faker->boolean(80),
            'church_id' => Church::inRandomOrder()->first()->id ?? null,
        ];
    }

    public function forChurch($churchId)
    {
        return $this->state([
            'church_id' => $churchId,
        ]);
    }
} 