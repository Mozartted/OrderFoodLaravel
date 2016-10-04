<?php

namespace App\Http\Controllers\Admin;

use App\Models\Flavour;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;



class FlavourController extends Controller
{
    public function _construct(){

    }

    protected function creating(Request $requests)
    {

        Flavour::create([
                'name' => $requests['name'],
                'percent' => $requests['percent'],
            ]
        );


        return redirect('administrator/flavours')->withSuccess("Feature created Successfully");
    }

    protected function deleted(Flavour $id){
        $id->delete();
        return redirect('administrator/flavours')
            ->withSuccess('Feature has been deleted.');
    }

    public function edit(Flavour $flavour) {

        return view('admin.sections.flavour_edit',['featMenu'=>true])->with('flavour',$flavour);
    }

    public function update(Request $requests,Flavour $flavour) {
        $flavour->update(Input::all());
        return redirect('/administrator/flavours')
            ->withSuccess('feature has been updated.');
    }
}
