<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'fullname' => $this->faker->sentence,
            'email' => $this->faker->email,
            'password' => $this->faker->sentence,
            'status' => $this->faker->boolean,
        ];
    }
}
