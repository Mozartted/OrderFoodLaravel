<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Flavour;
use App\Models\Icing;
use App\Models\Shape;
use App\User;
use Illuminate\Http\Request;
use App\User as Users;

use App\Http\Requests;
use App\UserGroup;
use App\Models\Product;
use App\Models\Price;
use App\Models\Size;
use App\Models\Feature;

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
        return view('admin.sections.features',['features'=>Feature::all(),'featMenu'=>true]);
    }

    public function flavours_view()
    {
        return view('admin.sections.flavours',['flavours'=>Flavour::all(),'featMenu'=>true]);
    }

    public function shapes_view()
    {
        return view('admin.sections.shape',['shapes'=>Shape::all(),'featMenu'=>true]);
    }

    public function icings_view()
    {
        return view('admin.sections.icing',['icings'=>Icing::all(),'featMenu'=>true]);
    }

    public function prices_view()
    {
        return view('admin.sections.prices',['prices'=>Price::all(),'featMenu'=>true]);
    }

    public function sizes_view()
    {
        return view('admin.sections.size',['sizes'=>Size::all(),'featMenu'=>true]);
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
