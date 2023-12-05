<?php

namespace App\Models;

use App\Models\Hall;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'hall_id', 'rating', 'comment', 'review_date'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hall() {
        return $this->belongsTo(Hall::class, 'hall_id');
    }

    public function booking() {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
