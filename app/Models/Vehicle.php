<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{

    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'vehiclemodel_id',
        'plaque',
        'color',
        'manufacturing',
        'yearmodel',
        'chassi',
    ];

    public function vehiclemodel()
    {
        return $this->belongsTo(Vehiclemodel::class);
    }
}
