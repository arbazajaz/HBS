<?php

namespace App\Models;

use App\Models\Review;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hall extends Model {
    use HasFactory;


    protected $fillable = [
        'name', 'capacity', 'location','picture', 'facilities', 'price_per_hour'
    ];

    public function bookings() {
        return $this->hasMany(Booking::class, 'id');
    }

    public function reviews() {
        return $this->hasMany(Review::class, 'id');
    }
}
