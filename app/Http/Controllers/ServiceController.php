<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

	public function select_service(Request $request)
	{
		return view('service');
	}
    public function getServices()
    {
        $services['services'] = Service::all();

        // dd($services);
        return view('service')->with($services);
    }

}
