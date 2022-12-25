<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition()
    {
        return [
            
			'vehiclemodel_id' => 1,
			'plaque' => $this->faker->randomNumber(8),
			'color' => 'AB',
			'manufacturing' => $this->faker->numberBetween(1, 100),
			'yearmodel' => $this->faker->numberBetween(1, 100),
			'chassi' => $this->faker->sentence,
             
        ];

    }
}
