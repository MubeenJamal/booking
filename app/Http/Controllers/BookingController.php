<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
class BookingController extends Controller
{
    public function booking_from(Request $request)
    {
    	return view('booking.booking_form');
    }

    public function create_booking_details(Request $request)
    {
    	$data = array(
    		'start_date' => $request->start_date,
    		'start_time' => $request->start_time,
    		'end_date' => $request->end_date,
    		'end_time' => $request->end_time,
    	);
    	// $data = request()->except(['submit']);
    	$date_time = Booking::insert($data);
    	
    	// dd($date_time);
    	return view('booking.booking_form');
    }
}
