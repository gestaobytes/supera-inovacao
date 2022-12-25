<?php

namespace App\Observers;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;


class VehicleObserver
{
    public function creating(Vehicle $model)
    {
        $model->uuid = Str::uuid();
    }
    public function created(Vehicle $model)
    {
        Cache::forget('vehicles');
    }
    public function updating(Vehicle $model)
    {
    }
    public function updated(Vehicle $model)
    {
        Cache::forget('vehicles');
    }
    public function deleted(Vehicle $model)
    {
        Cache::forget('vehicles');
    }
    public function restored(Vehicle $model)
    {
        Cache::forget('vehicles');
    }
    public function forceDeleted(Vehicle $model)
    {
        Cache::forget('vehicles');
    }
}
