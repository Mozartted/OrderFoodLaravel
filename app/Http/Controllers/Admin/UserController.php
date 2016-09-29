<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller as Controller;
use App\User as Users;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function _construct(){

    }

    protected function creating(Request $requests)
    {
        Users::create([
            'name' => $requests['name'],
            'email' => $requests['email'],
            'password' => bcrypt($requests['password']),
            'user_group'=>$requests['user_group']
        ]);
        return redirect('administrator/users')->withSuccess("User created Successfully");
    }

    protected function deleted(Users $id){
        $id->delete();
        return redirect('administrator/users')
            ->withSuccess('User has been deleted.');
    }

    public function edit(Users $user) {
        return view('admin.sections.edit')->with('user', $user);
    }

    public function update(Request $request,Users $user) {
        $user->update(Input::all());
        return redirect('/administrator/users')
            ->withSuccess('User has been updated.');
    }
}
