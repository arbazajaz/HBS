<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create($bookingId) {
        $booking = Booking::findOrFail($bookingId);
        return view('payments.create', compact('booking'));
    }

    public function store(Request $request) {
        // Validate and store the payment
        // You might want to update the booking status here

        return redirect()->route('payments.show', $payment->id);
    }

    public function show($id) {
        $payment = Payment::findOrFail($id);
        return view('payments.show', compact('payment'));
    }
}
