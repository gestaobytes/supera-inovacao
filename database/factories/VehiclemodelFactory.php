<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Vehiclemodel;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class VehiclemodelFactory extends Factory
{
    protected $model = Vehiclemodel::class;

    public function definition()
    {
        return [
            
			'name' => $this->faker->name,
			'brand' => $this->faker->word,
			'version' => $this->faker->word,
             
        ];

    }
}
