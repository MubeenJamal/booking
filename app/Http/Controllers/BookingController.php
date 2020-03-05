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
        // dd($request->input());
        $data = $request->except(['_token']);
        $data['service'] = explode('-',$request->service)[0];
        $data['price'] = explode('-',$request->service)[1];
    	$ins = Booking::insert($data);
		if($ins)
			echo "Insert";
		else
			echo "not inserted";
    }
}
