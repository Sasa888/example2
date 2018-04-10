<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Homedata;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function home(Request $request)
    {
        $data = $request->input('code');
        if($data == 1234)
        {
           return view('home');  
        }
        else {
            Auth::logout();
            return view('welcome'); 
        }
         
       
    }
    
    public function store(Request $request)
    {
         $homedata = new Homedata;
         $homedata->user_id = Auth::user()->id; // This will add user_to Userregq if applicable 
         $homedata->device = implode(", ", $request->device);
         $homedata->reimburse_Pension = json_encode(request('reimburse_Pension')) ;
         $homedata->bonus_remainder = json_encode(request('bonus_remainder'));
         $homedata->save();
        
       return redirect('/confirm');
    
    }
    
    
    public function securitynumber()
    {
        return view('securitynumber');
    }

     
}
