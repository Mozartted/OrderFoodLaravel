<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthLoginController extends Controller
{
    //
    private $service=1;
    public function login(){
        return view('auth.login')->with('service_sec',$this->service);
    }
}
