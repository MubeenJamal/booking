<?php

namespace App\Http\Controllers;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Http\Request;
use App\Booking;
use Stripe;
class BookingController extends Controller
{
    public function booking_from(Request $request)
    {
    	return view('booking.booking_form');
    }

    public function paypalPayment(Request $request)
    {
        $booking_data = $request->except(['_token','card_holder','card_number','csv','expiry']);
        $services = ",";
        foreach($booking_data['service'] as $k => $service)
           $services .= explode('-',$service)[0];

        $booking_data['service'] = $services;
        $booking_data['service_type'] = implode(',',$request->service_type);
        $booking_data['price'] = $request->total;
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

        //PAYPAL INTEGRATION
        // $provider = new ExpressCheckout;
        // // $response = $provider->setExpressCheckout($data);
        // $response = $provider->setExpressCheckout($data, true);
        // $redirect_url = $response['paypal_link'];
        // return redirect($redirect_url);

        //STRIPE INTEGRATION
        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $card_detail = array(
                'card' => [
                    'number' => $request->card_number,
                    'exp_month' => $request->exp_month,
                    'exp_year' => $request->exp_year,
                    'cvc' => $request->cvc,
                  ]
            );
            $token = Stripe\Token::create($card_detail);
            if(!$token->error){
                $detail = array(
                    "amount" => $booking_data['price'],
                    "currency" => 'EUR',
                    "source" => $token->id,
                    "description" => "ParkMe Payment",
                    'transfer_group' =>$ins->id
                );
                $charge = Stripe\Charge::create($detail);
                if(isset($charge->id) && !empty($charge->id)){
                    $this->_responseData['status'] = 1;
                    $this->_responseData['message'] = "Charged has been made";
                    $this->_responseData['data'] = $charge;
                }else{
                    $this->_responseData['status'] = 0;
                    $this->_responseData['message'] = "Failed to charged";
                }
            }else{
                $this->_responseData['status'] = 0;
                $this->_responseData['message'] = $token->message;
            }

        }catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            $body = $e->getJsonBody();
            $err  = $body['error'];
            $this->_responseData['status'] = 0;
            $this->_responseData['message'] = $err['message'];
        }
        echo $this->_responseData['message'];
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
