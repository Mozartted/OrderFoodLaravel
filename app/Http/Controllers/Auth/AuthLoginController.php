<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthLoginController extends Controller
{
    //
    private $service=1;
    public function login(){
        return view('auth.login')->with('service_sec',$this->service);
    }
}
