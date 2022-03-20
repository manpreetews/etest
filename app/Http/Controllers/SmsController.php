<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SmsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     // return view('home');
    // }

    /**
     * Send OTP SMS
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sendOTP(Request $request,$phone){
        // dd($request);
        // dd($phone);
        $otp = rand(100000  ,999999);
        $affected = DB::table('users')
              ->where('mobile', $phone)
              ->update(['otp' => $otp]);
            //   ->update(['otp_expiry' => $otp]);
        
        if($affected == 1){
            // $response = file_get_contents($api);
            echo "SMS Sent Successfully";
        
        
            $message = "Hi User, your OTP to login is ".$otp.". Thank, Team eQuasar Solutions";
            $message = urlencode($message);
            echo $api = "http://cloud.smsindiahub.in/api/mt/SendSMS?APIKey=No30W31Hnkmi7KNd4EIRYg&senderid=IMHAPP&channel=trans&DCS=0&flashsms=0&number=".$phone."&text=".$message;
        }
        // $response = file_get_contents($api);
        
        // die($affected);
    }
    
}
