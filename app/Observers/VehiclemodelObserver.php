<?php

namespace App\Observers;

use App\Models\Vehiclemodel;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;


class VehiclemodelObserver
{
    public function creating(Vehiclemodel $model)
    {
        $model->uuid = Str::uuid();
    }
    public function created(Vehiclemodel $model)
    {
        Cache::forget('vehiclemodels');
    }
    public function updating(Vehiclemodel $model)
    {
    }
    public function updated(Vehiclemodel $model)
    {
        Cache::forget('vehiclemodels');
    }
    public function deleted(Vehiclemodel $model)
    {
        Cache::forget('vehiclemodels');
    }
    public function restored(Vehiclemodel $model)
    {
        Cache::forget('vehiclemodels');
    }
    public function forceDeleted(Vehiclemodel $model)
    {
        Cache::forget('vehiclemodels');
    }
}
