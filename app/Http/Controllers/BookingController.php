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
        $data = $request->except(['_token','card_holder','card_number','csv','expiry']);
        $data['service'] = explode('-',$request->service)[0];
        $data['price'] = explode('-',$request->service)[1];
    	$ins = Booking::insert($data);
		if($ins)
			return redirect()->back()->with('message', 'your appointment is completed!');
		else
			return redirect()->back()->with('failed_message', 'Sorry your appointment is not completed!');
    }
}
