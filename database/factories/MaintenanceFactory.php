<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Maintenance;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class MaintenanceFactory extends Factory
{
    protected $model = Maintenance::class;

    public function definition()
    {
        return [
            
			'vehicle_id' => 1,
			'user_id' => 1,
			'km' => $this->faker->numberBetween(1, 100),
			'dateservice' => $this->faker->date('Y-m-d'),
			'values' => $this->faker->randomFloat(2, 1, 100),
			'observations' => $this->faker->sentence,
             
        ];

    }
}
