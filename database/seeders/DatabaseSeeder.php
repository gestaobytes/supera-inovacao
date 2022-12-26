<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            Users::class,
        ]);

        \App\Models\Vehiclemodel::factory(30)->create();
        \App\Models\Vehicle::factory(30)->create();
        \App\Models\Maintenance::factory(30)->create();
    }
}
