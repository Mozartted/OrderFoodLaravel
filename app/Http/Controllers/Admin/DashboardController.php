<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.layouts.master');
    }


}
