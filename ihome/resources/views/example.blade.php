 public function payment(Request $request){
                $orphan = new Donation;
                $BusinessShortCode-> $orphan = $request->input('paybill');
                $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
                $TransactionType = "CustomerPayBillOnline";
                $AccountReference = "Ihome";
                $CallBackURL = "https://callback.blaqueyard.com/mpesa/call.php";
                $Amount= $request->input('amount');
                $PartyA =$request->input('number');
                $PartyB = $BusinessShortCode;
                $PhoneNumber = $PartyA;
                $TransactionDesc = "GoodSamaritan";
                $Remarks = "Ihome";
                $orphan->save();

 $mpesa= new \Safaricom\Mpesa\Mpesa();
 $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
 return $stkPushSimulation;
 return redirect('/samaritan');
  }
 
 
 
 
 
 
 
 form class="form-group mpesa"  method="POST" action="/Mpesa/payment"> 
  
  
  <label>Enter Name</label>
                  <input type="text" class="form-control" placeholder="input name" name="name">
                  <label>Enter Email</label>
                  <input type="number" class="form-control" placeholder="input email" name="email"><br>
 
 
 
 $BusinessShortCode = "174379";
                $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
                $TransactionType = "CustomerPayBillOnline";
                $Amount = "1";
                $PartyA = "254714588140";
                $PartyB = "174379";
                $PhoneNumber = "254714588140";
                $CallBackURL = "https://callback.blaqueyard.com/mpesa/call.php";
                $AccountReference = "Ihome";
                $TransactionDesc = "GoodSamaritan";
                $Remarks = "Ihome";
            
        return $stkPushSimulation;
 
 
 
 public function STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remark){
        $environment=env("MPESA_ENV");
        if( $environment =="live"){
            $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
            $token=self::generateLiveToken();
        }elseif ($environment=="sandbox"){
            $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
            $token=self::generateSandBoxToken();
        }else{
            return json_encode(["Message"=>"invalid application status"]);
        }



        $timestamp='20'.date(    "20180719220823");
        $password=base64_encode("174379"."bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919"."20180719220823");

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token));


        $curl_post_data = array(
             $BusinessShortCode=> '174379',
             $password => $password,
             $timestamp => $timestamp,
             $TransactionType=>'CustomerPayBillOnline',
             $Amount=>'2',
             $PartyA=>'254714588140',
             $PartyB =>'174379',
             $PhoneNumber=>'254714588140',
             $CallBackURL=>'https://soft-cougar-60.localtunnel.me',
             $AccountReference=>'Mgdssgs7',
             $TransactionType=>'ihome',
             $Remark=>'Good samaritan'
        );

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $curl_response=curl_exec($curl);
        return $curl_response;


    }
 
 
 
 
 
 
 
 {{in_array('male',$orphans)? 'checked' : ''}}>
 
 
 
 public function mpesanew(){
        //setting custom header
        $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer Icm3gD9EUMo6YUKeFKcRRjfGfZHi')); //setting custom header

        //body section
        $curl_post_data = array(
        //Fill in the request parameters with valid values
        'BusinessShortCode' => '174379 ',
        'Password' => 'MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMTgwNzEwMTcwMTI1 ',
        'Timestamp' => '20180710170125 ',
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount"' => '2',
        'PartyA' => '254714588140',
        'PartyB' => '174379',
        'PhoneNumber' => '254714588140',
        'CallBackURL' => 'https://jolly-hound-59.localtunnel.me',
        'AccountReference' => 'Good Samaritan ',
        'TransactionDesc' => 'ihome '
        );

        //responses
        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $curl_response = curl_exec($curl);
        print_r($curl_response);

        echo $curl_response;

        //setting a http listner
        $postData = file_get_contents('https://jolly-hound-59.localtunnel.me');
        //perform your processing here, e.g. log to file....
        $file = fopen("log.txt", "w"); //url fopen should be allowed for this to occur
       if(fwrite($file, $postData) === FALSE)
        {
                fwrite("Error: no data written");
        }

        fwrite($file, $postData);
        fclose($file);

        echo '{"ResultCode": 0, "ResultDesc": "The service was accepted successfully", "ThirdPartyTransID": "1234567890"}';
        
       
       
        }
 
 
 
 
 
 public function STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remark){
        $environment=env("MPESA_ENV");
        if( $environment =="live"){
            $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
            $token=self::generateLiveToken();
        }elseif ($environment=="sandbox"){
            $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
            $token=self::generateSandBoxToken();
        }else{
            return json_encode(["Message"=>"invalid application status"]);
        }



        $timestamp='20'.date(    "20180719220823");
        $password=base64_encode("174379"."bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919"."20180719220823");

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token));


        $curl_post_data = array(
            '174379' => $BusinessShortCode,
             $password => $password,
             $timestamp => $timestamp,
            'CustomerPayBillOnline' => $TransactionType,
            '2' => $Amount,
            '254714588140' => $PartyA,
            '174379' => $PartyB,
            '254714588140' => $PhoneNumber,
            'https://soft-cougar-60.localtunnel.me' => $CallBackURL,
            'Mgdssgs7' => $AccountReference,
            'ihome' => $TransactionType,
            'Good samaritan'=> $Remark
        );

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $curl_response=curl_exec($curl);
        return $curl_response;


    }



  https://jolly-hound-59.localtunnel.me
  
        $BusinessShortCode = "174379";
        $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType = "CustomerPayBillOnline";
        $Amount = "5";
        $PartyA = "254714588140";
        $PartyB = "174379";
        $PhoneNumber = "254714588140";
        $CallBackURL = "https://callback.blaqueyard.com/mpesa/call.php";
        $AccountReference = "Ruaka";
        $TransactionDesc = "RuakaLTD";
        $Remarks = "Ruaka";

//        $mpesa = new \Safaricom\Mpesa\Mpesa();
//
//        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
//
//        return $stkPushSimulation;

        $mpesa= new \Safaricom\Mpesa\Mpesa();

        $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);

        return $stkPushSimulation;

 
 
 // URL
[POST] https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest

// HEADERS
Host: sandbox.safaricom.co.ke
Authorization: Bearer [access token]
Content-Type: application/json

// BODY
{
	"BusinessShortCode": "174379",
	"Password": "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMTgwNzE4MTg1OTAw",
	"Timestamp": "20180718185900",
	"TransactionType": "[Transaction Type]",
	"Amount": "1000",
	"PartyA": "254708374149",
	"PartyB": "174379",
	"PhoneNumber": "254708374149",
	"CallBackURL": "https://peternjeru.co.ke/safdaraja/api/callback.php"
	"AccountReference": "account",
	"TransactionDesc": "test" ,
}




<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>


<div class="container-fluid">
        <div class="logo">
          <img src="img/LOGO.png" id="logo">
        </div>
        <nav class="header">
            <ul>
                <li>
                    <a href="/records/create">Orphans Records</a>
                </li>
                <li>
                    <a href="/management/create">Management Records</a>
                </li>
                <li>
                    <a href="/reports">Reports</a>
                </li>
            </ul>
        </nav>
        
    </div>







<a href="/records"><button class="btn btn-danger" name="reset">Reset</button></a>
.my-navbar{
    position: absolute;
    width: 100%;
    z-index: 999;
    background: none;
    border: 0;
    border-radius: 0;

}

.my-navbar .nav-link a{
    color: white !important;
}

.my-carousel{
    position: absolute;
    top: 0;
}


a:hover{
    display: block;
}

// this is how a typical laravel form should look like

         {{Form::label('name','Name')}}
           {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter your name '])}}

           {{Form::label('date','Date Joined')}}
           {{Form::date('date','',['class'=>'form-control'])}} 

           {{Form::label('sex','Gender:')}}
           {{Form::select('sex', ['M' => 'Male', 'F' => 'Female' ,['class'=>'form-control']])}} 
<br>
           {{Form::label('info','Bio:')}}
           {{Form::textarea('info','',['class'=>'form-control','placeholder'=>'Enter your details '])}} 

        </div>
    {{Form::Submit('submit',['class'=>'btn btn-primary'])}} 


   //this is my login 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Good Samaritan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>


</head>

<body>
    <div class="container-fluid">
        <div class="logo">
          <img src="img/LOGO.png" id="logo">
        </div>
        <nav class="header">
            <ul>
                <li>
                    <a href="/samlogin">LOGIN</a>
                </li>
              
            </ul>
        </nav>
    </div>
<br>
<div class="container" id="login">
    <form class="form-group">
        <label>Username:</label>
        <input type="text" class="form-control" placeholder="input username" id="login"><br>
        <label>Password:</label>
        <input type="password" class="form-control" placeholder="input password" id="login"> <br>
         
        <button class="btn btn-danger"> <a href="/records">Login</a></button>
</form>
</div>
   
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
<div class="container-fluid">
        <div class="logo">
          <img src="img/LOGO.png" id="logo">
        </div>
        <nav class="header">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#home">Find a Home</a>
                </li>
                <li>
                    <a href="/faqs">FAQS</a>
                </li>
            </ul>
        </nav>
    </div>


app blade for auth

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="logo">
          <img src="img/LOGO.png" id="logo">
        </div>
    <nav class="header">
            <ul>
                 @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="/samaritan">Home</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdon-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
              
            </ul>
        </nav>
    <div id="app">

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!--
   <li><a href="{{ route('register') }}">Register</a></li>

-->



 <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>