<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewsController extends Controller
{
    //This controller is created to control the views of the application
    //focusing on the major views
    //galleria, about, section pages etc.
    private $service=1;
    public function service(){

        return view('sections.service')->with('service_sec',$this->service)->with('view_contact',$this->service);
    }

    public function home(){
        return view('layouts.master')->with('view_clients',$this->service)->with('view_contact',$this->service);
    }

    public function gallery(){
        return view('sections.galleria');
    }

    public function about(){
        return view('sections.about');
    }

    public function team(){
        return view('sections.team');
    }

}
