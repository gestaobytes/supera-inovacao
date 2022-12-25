<?php

namespace App\Observers;

use App\Models\Maintenance;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;


class MaintenanceObserver
{
    public function creating(Maintenance $model)
    {
        $model->uuid = Str::uuid();
    }
    public function created(Maintenance $model)
    {
        Cache::forget('maintenances');
    }
    public function updating(Maintenance $model)
    {
    }
    public function updated(Maintenance $model)
    {
        Cache::forget('maintenances');
    }
    public function deleted(Maintenance $model)
    {
        Cache::forget('maintenances');
    }
    public function restored(Maintenance $model)
    {
        Cache::forget('maintenances');
    }
    public function forceDeleted(Maintenance $model)
    {
        Cache::forget('maintenances');
    }
}
