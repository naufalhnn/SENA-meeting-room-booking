<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'building_id',
        'name',
        'description',
        'capacity',
    ];

    public function building() 
    {
        return $this->belongsTo(Building::class, 'building_id', 'id');
    }

    public function bookings() 
    {
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }
}
