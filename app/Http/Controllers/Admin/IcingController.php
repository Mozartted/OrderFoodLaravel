<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Models\Icing;


class IcingController extends Controller
{
    public function _construct(){

    }

    protected function creating(Request $requests)
    {

        Icing::create([
                'name' => $requests['name'],
            ]
        );


        return redirect('administrator/icings')->withSuccess("Icing created Successfully");
    }

    protected function deleted(Icing $id){
        $id->delete();
        return redirect('administrator/icings')
            ->withSuccess('Feature has been deleted.');
    }

    public function edit(Icing $icing) {

        return view('admin.sections.icing_edit',['featMenu'=>true])->with('icing',$icing);
    }

    public function update(Request $requests,Icing $icing) {
        $icing->update(Input::all());
        return redirect('/administrator/icings')
            ->withSuccess('icing has been updated.');
    }
}
