<?php

namespace App\Http\Controllers;

use App\CarType;
use Illuminate\Http\Request;
use App\Booking;
class CarTypeController extends Controller
{

	public function select_car(Request $request)
	{
		return view('pick_car');
	}
    public function getCarTypes(Request $request)
    {
    	$data = array(
    		'start_date' => $request->start_date,
    		'start_time' => $request->start_time,
    		'end_date' => $request->end_date,
    		'end_time' => $request->end_time,
    	);
    	// $data = request()->except(['submit']);
    	$date_time = Booking::insert($data);

        $carTypes['cars'] = CarType::all();

        // dd($carTypes);
        return view('pick_car')->with($carTypes);
    }
}
