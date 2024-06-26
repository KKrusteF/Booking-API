<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        return Booking::all();
    }

    public function store(BookingRequest $request)
    {
        return Booking::create($request->validated());
    }

    public function show(Booking $booking)
    {
        return $booking;
    }

    public function update(BookingRequest $request, Booking $booking)
    {
        $booking->update($request->validated());

        return $booking;
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return response()->json();
    }
}
