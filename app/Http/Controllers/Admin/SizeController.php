<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;



class SizeController extends Controller
{
    public function _construct(){

    }

    protected function creating(Request $requests)
    {

        Size::create([
                'name' => $requests['name'],
                'percent' => $requests['percent'],
            ]
        );


        return redirect('administrator/sizes')->withSuccess("size created Successfully");
    }

    protected function deleted(Size $id){
        $id->delete();
        return redirect('administrator/sizes')
            ->withSuccess('Size has been deleted.');
    }

    public function edit(Size $size) {

        return view('admin.sections.size_edit',['featMenu'=>true])->with('size',$size);
    }

    public function update(Request $requests,Size $size) {
        $size->update(Input::all());
        return redirect('/administrator/sizes')
            ->withSuccess('feature has been updated.');
    }
}