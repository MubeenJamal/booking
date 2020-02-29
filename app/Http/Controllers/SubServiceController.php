<?php

namespace App\Http\Controllers;

use App\SubService;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    public function getSubServices()
    {
        $sub_services = SubService::all();

        dd($sub_services);
    }
}
