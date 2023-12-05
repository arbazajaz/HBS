<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'booking_id', 'payment_date', 'amount', 'payment_status'
    ];

    public function booking() {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
