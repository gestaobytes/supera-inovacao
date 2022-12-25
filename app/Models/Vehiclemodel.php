<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehiclemodel extends Model
{

    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'vehiclemodels';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'name',
        'brand',
        'version',
    ];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
