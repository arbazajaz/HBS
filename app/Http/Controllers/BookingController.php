<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create($hallId) {
        $hall = Hall::findOrFail($hallId);
        return view('bookings.create', compact('hall'));
    }

    public function store(Request $request) {
        // Validate and store the booking
        // You might also want to handle payment logic here

        return redirect()->route('bookings.show', $booking->id);
    }

    public function show($id) {
        $booking = Booking::findOrFail($id);
        return view('bookings.show', compact('booking'));
    }
}
