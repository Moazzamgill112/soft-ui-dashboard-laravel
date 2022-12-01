<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $booking = new Booking;
        $booking->name = $request->name;
        $booking->room = $request->room;
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
        $booking->start_time = $request->start_time;
        $booking->end_time = $request->end_time;
        $booking->save();
        return redirect()->back();


    }

}
