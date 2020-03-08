<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Service;
use App\CarType;
use App\SubService;
Route::get('/', function () {

	$services['car_types'] = CarType::all();
	$services['services'] = Service::all();
	$services['washing'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','washing')->get();
	$services['gasoline'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','gasoline')->get();
	$services['maintenance'] = Service::join('sub_services','sub_services.sub_services_type','=' ,'services.id')->where('services.services_type','maintenance')->get();
	// dd($services['washing']);
    return view('welcome')->with($services);

});

Auth::routes(['register'=>true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/cars', 'CarTypeController@getCarTypes')->name('cars');
Route::get('/services', 'ServiceController@getServices')->name('services');
Route::get('/sub/services', 'SubServiceController@getSubServices')->name('sub_services');
Route::get('booking_form','BookingController@booking_from')->name('booking_form');
Route::post('paypal_payment','BookingController@paypalPayment')->name('paypal_payment');
Route::get('payment/success', 'BookingController@success')->name('payment.success');
Route::get('thankyou', function(){
	echo "<h1>Thank you so much for booking</h1>";
})->name('payment.thankyou');

Route::get('paypal', function () {
    return view('payment');
});
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');

