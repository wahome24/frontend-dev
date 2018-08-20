<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Donation;

class MpesaController extends Controller
{
  public function payment(Request $request){
                $BusinessShortCode = Input::has('paybill') ? Input::get('paybill') : null;
                $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
                $TransactionType = "CustomerPayBillOnline";
                $AccountReference = "Ihome";
                $CallBackURL = "https://callback.blaqueyard.com/mpesa/call.php";
                $Amount= Input::has('amount') ? Input::get('amount') : null;
                $PartyA = Input::has('number') ? Input::get('number') : null;
                $PartyB = $BusinessShortCode;
                $PhoneNumber = $PartyA;
                $TransactionDesc = "GoodSamaritan";
                $Remarks = "Ihome";

 $mpesa= new \Safaricom\Mpesa\Mpesa();
 $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
 return response()->json($stkPushSimulation);
 return redirect('/samaritan');
  }
 
}

