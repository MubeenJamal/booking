<?php

namespace App\Http\Controllers;

use App\SubService;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{

	public function select_sub_service(Request $request)
	{
		return view('sub_services');
	}
    public function getSubServices()
    {
        $sub_services['sub_services'] = SubService::all();

        // dd($sub_services);
        return view('service')->with($sub_services);
    }
}
