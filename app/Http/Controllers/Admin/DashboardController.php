<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\User as Users;

use App\Http\Requests;

class DashboardController extends Controller
{


    public function _construct(){

    }

    public function dashboard()
    {
        return view('admin.sections.dashboard');
    }

    public function users_view()
    {

        return view('admin.sections.users',['users'=>User::all()]);
    }

    public function product_view()
    {
        return view('admin.sections.product');
    }

    public function order_view()
    {
        return view('admin.sections.orders');
    }

    public function blog()
    {
        return view('admin.sections.blog');
    }

    public function features_view()
    {
        return view('admin.sections.features');
    }

    public function blog_view()
    {
        return view('admin.sections.blog');
    }

    public function messages_view()
    {
        return view('admin.sections.messages');
    }

    public function forum_view()
    {
        return view('admin.sections.forum');
    }


}
