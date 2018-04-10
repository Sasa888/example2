<?php

namespace App\Http\Controllers\SLA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Homedata;

class UsersController extends Controller
{
    
    public function index()
    {
        $users = User::with(['homedata'])->get();
        //$homedata = Homedata::all();
        
        
        
        return view('sla.users.index', ['users' => $users]);
    }
    
     
}
