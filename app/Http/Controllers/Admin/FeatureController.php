<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Models\Feature;


class FeatureController extends Controller
{
    public function _construct(){

    }

    protected function creating(Request $requests)
    {

        Feature::create([
                'name' => $requests['name'],
                'percent' => $requests['percent'],
            ]
        );


        return redirect('administrator/features')->withSuccess("Feature created Successfully");
    }

    protected function deleted(Feature $id){
        $id->delete();
        return redirect('administrator/features')
            ->withSuccess('Feature has been deleted.');
    }

    public function edit(Feature $feature) {

        return view('admin.sections.feature_edit',['featMenu'=>true])->with('feature',$feature);
    }

    public function update(Request $requests,Feature $feature) {
        $feature->update(Input::all());
        return redirect('/administrator/features')
            ->withSuccess('feature has been updated.');
    }
}
