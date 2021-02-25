<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentsController extends Controller
{
    public function index() {
        return view('carts');
    }

    public function handlePayment(Request $request)
    {
        $request->validate([
            'amount' => 'required'
        ]);

        try {

            $gateway = Omnipay::create('PayPal_Rest');
            $gateway->setClientId(env('PAYPAL_SANDBOX_CLIENT_ID','ENkNSAGY5L1pAVuy5a8dYeL_K3waiIW-ZLCOeSQDTLoDY42h3oqX_AGAgaAbxM1uVR53W32slLYSeqJr'));
            $gateway->setSecret(env('PAYPAL_SANDBOX_CLIENT_SECRET','AYj7mB3NywLmelbkLoXoXqGY9hy57yp2raUSbLhoy3c78v5CxUc4IXDVMlywkUhOFg4D8VdAWCHeLMag'));
            $gateway->setTestMode(true);

            $response = $gateway->purchase(array(
                'amount' => $request->amount/100,
                'currency' => strtoupper(env('PAYPAL_CURRENCY', 'USD')),
                'returnUrl' => route('success.payment'),
                'cancelUrl' => route('cancel.payment'),
            ))->send();
            if ($response->isRedirect()) {
                $response->redirect(); // this will automatically forward the customer
            } else {
                // not successful
                return route('cancel.payment');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function paymentCancel()
    {
        $res['state'] = false;
        $res['message'] = 'Your payment has been declend. The payment cancelation page goes here!';
        return $res;
    }

    public function paymentSuccess(Request $request)
    {
        $gateway = Omnipay::create('PayPal_Rest');
        $gateway->setClientId('AYj7mB3NywLmelbkLoXoXqGY9hy57yp2raUSbLhoy3c78v5CxUc4IXDVMlywkUhOFg4D8VdAWCHeLMag');

        $gateway->setSecret('ENkNSAGY5L1pAVuy5a8dYeL_K3waiIW-ZLCOeSQDTLoDY42h3oqX_AGAgaAbxM1uVR53W32slLYSeqJr');
        $request= $request->all();

        $transaction = $gateway->completePurchase(array(
            'payer_id'             => $request['PayerID'],
            'transactionReference' => $request['paymentId'],
        ));

        $response = $transaction->send();

        if ($response->isSuccessful()) {
            $arr_body = $response->getData();
            $data['payment_id'] = $arr_body['id'];
            $data['payment_method'] = "paypal";

            $res['state'] = true;
            $res['message'] = "Payment success";
            return $res;
        }
        else{
            return route('cancel.payment');
        }
    }
}