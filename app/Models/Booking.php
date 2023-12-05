<?php

namespace App\Models;

use App\Models\Hall;
use App\Models\User;
use App\Models\Review;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id', 'hall_id', 'booking_date', 'start_time', 'end_time', 'total_cost', 'booking_status'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hall() {
        return $this->belongsTo(Hall::class, 'hall_id');
    }

    public function payment() {
        return $this->hasOne(Payment::class, 'id');
    }

    public function review() {
        return $this->hasOne(Review::class, 'id');
    }
}
