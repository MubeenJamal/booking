<?php

namespace App\Http\Controllers;

use App\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{

    public function getCarTypes()
    {
        $carTypes = CarType::all();

        dd($carTypes);
    }
}
