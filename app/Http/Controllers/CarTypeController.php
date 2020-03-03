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

        $cars = CarType::all();
        foreach($cars as $k => $car)
        {
        	$selcet_car = '<div class="col-sm-4 col-12">
				<div class="page1-car">
					<label>
						<input type="radio" name="'.$car->car_type.'" value="'.$car->car_type.'" checked />
						<img src="'.asset('public/assets/images/'.$car->icon).'" class="img-fluid" alt="img" />
					</label>
				</div>
			</div>';	
		}
        // dd($carTypes);
        $response['car_types'] = '<div class="arrival-time">
						<div class="container">
							<div class="row">
								<div class="col-sm-10 offset-sm-1">

									<div class="row">
										
										<div class="col-sm-3 col-3">
									      <div class="arrive arri">
									        <label> ARRIVE </label>
									        <div class="sdate">03/03</div>
									        <div class="stime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="departure arri">
									        <label> DEPART </label>
									        <div class="sdate">03/18</div>
									        <div class="stime">5:00</div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="services arri">
									        <label> SERVICE </label>
									        <div class="service">Navette PARKME (0€)</div>
									        <div class=""> &nbsp; </div>
									      </div>
										</div>

										<div class="col-sm-3 col-3">
									      <div class="departure arri">
									        <label> TOTAL </label>
									        <div class="total-price"> € 0.00 </div>
									        <div class=""> &nbsp; </div>
									      </div>
										</div>

									</div>
								</div>
							</div>
				    	</div>
					</div>

					<div class="container">
			    		<div class="row">
			                <div class="col-sm-12 col-12">
			                    <div class="page1-header">
			                        <h3>ETAPE 2: SERVICE</h3>
			                    </div>
			                </div>
			            </div>

			        	<div class="page1">
							<div class="row">
				                <div class="col-sm-12 col-12">
				                    <div class="page1-header">
				                        <p>CLIQUER SUR TAILLE DU VECICULE</p>
				                    </div>
				                </div>
				            </div>
				            
				            <div class="row">
								'.$selcet_car.'

				            <div class="row">
				            	<div class="col-sm-6 p-0">
				            		<div class="blue-border1"></div>
				            	</div>
				            	<div class="col-sm-6 p-0">
				            		<div class="blue-border2"></div>
				            	</div>
				            </div>
			        	</div>

			        	<div class="row">
							<div class="col-sm-6 offset-sm-3">
								<div class="row">
									<div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="'.asset('public/assets/images/img1.png').'" class="img-fluid" alt="img" />
										</div>
									</div>
									<div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="'.asset('public/assets/images/img2.png').'" class="img-fluid" alt="img" />
										</div>
									</div>
									<div class="col-sm-4 col-4">
										<div class="footer-icon">
											<img src="'.asset('public/assets/images/img3.png').'" class="img-fluid" alt="img" />
										</div>
									</div>
								</div>
							</div>
			        	</div>

			        	<div class="page1-btn">
			        		<a href="/" class="custom-btn2">Passer a la derniere etape</a>
							<a href="'.route('services').'" class="custom-btn">SUIVANT</a>
						</div>
			        </div>';
        	echo json_encode($response);
    }
}
