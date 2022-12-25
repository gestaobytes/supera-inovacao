<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maintenance extends Model
{

    use SoftDeletes, HasFactory, Notifiable;

    protected $table = 'maintenances';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'vehicle_id',
        'user_id',
        'km',
        'dateservice',
        'values',
        'observations',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
