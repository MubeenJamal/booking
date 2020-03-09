<?php

namespace App\Http\Controllers;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Http\Request;
use App\Booking;
class BookingController extends Controller
{
    public function booking_from(Request $request)
    {
    	return view('booking.booking_form');
    }

    public function paypalPayment(Request $request)
    {
        $booking_data = $request->except(['_token','card_holder','card_number','csv','expiry']);
        $booking_data['service'] = explode('-',$request->service)[0];
        $booking_data['price'] = explode('-',$request->service)[1];
        $ins = Booking::create($booking_data);
        $data = [];
        $data['items'] = [
            [
                'name' => 'Car booking',
                'price' => $booking_data['price'],
                'desc'  => 'Description for car booking',
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = $ins->id;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = $booking_data['price'];

        $provider = new ExpressCheckout;
        // $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data, true);
        $redirect_url = $response['paypal_link'];
        return redirect($redirect_url);
    }

        /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $booking = Booking::find($response['INVNUM']);
            $booking->status = 2;
            $booking->save();
            // $url = route('payment.thankyou');
            // return redirect($url);
            return redirect()->back()->with('message', "Merci d'avoir réservé!");

        }
        return redirect()->back()->with('failed_message', "Désolé votre réservation n'est pas terminée!");
        // dd('Something is wrong.');
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
