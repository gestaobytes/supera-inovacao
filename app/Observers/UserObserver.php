<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

class UserObserver
{
    public function creating(User $model)
    {
        $model->uuid = Str::uuid();
        $model['password'] = Hash::make($model['password']);
    }

    public function created(User $model)
    {
        Cache::forget('users');
    }
    public function updating(User $model)
    {
        $model['password'] = Hash::make($model['password']);
    }
    public function updated(User $model)
    {
        Cache::forget('users');
    }
    public function deleted(User $model)
    {
        Cache::forget('users');
    }
    public function restored(User $model)
    {
        Cache::forget('users');
    }
    public function forceDeleted(User $model)
    {
        Cache::forget('users');
    }
}
