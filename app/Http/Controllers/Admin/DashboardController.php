<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\User as Users;

use App\Http\Requests;
use App\UserGroup;
use App\Models\Product;
use App\Models\Price;
use App\Models\Size;

class DashboardController extends Controller
{

    protected $usergroup;

    public function _construct(UserGroup $userGroup){
        $this->usergroup=$userGroup;
    }

    public function dashboard()
    {
        return view('admin.sections.dashboard')->with('user_group',UserGroup::all());
    }

    public function users_view()
    {

        return view('admin.sections.users',['users'=>User::all(),'user_group'=>UserGroup::lists('name', 'id')]);
    }

    public function product_view()
    {
        return view('admin.sections.product',['products'=>Product::all(),'price'=>Price::lists('amount', 'id'),'sizes'=>Size::all()]);
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
