<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller as Controller;
use App\User as Users;

class UserController extends Controller
{
    public function _construct(){

    }

    protected function creating(array $data)
    {
        return Users::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function deleted(Users $id){
        $id->delete();
        return redirect('administrator/users')
            ->withSuccess('User has been deleted.');
    }
}
