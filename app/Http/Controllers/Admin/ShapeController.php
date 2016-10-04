<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Models\Shape;


class ShapeController extends Controller
{
    public function _construct(){

    }

    protected function creating(Request $requests)
    {

        Shape::create([
                'name' => $requests['name'],
            ]
        );


        return redirect('administrator/shapes')->withSuccess("Shapes created Successfully");
    }

    protected function deleted(Shape $id){
        $id->delete();
        return redirect('administrator/shapes')
            ->withSuccess('Feature has been deleted.');
    }

    public function edit(Shape $shape) {

        return view('admin.sections.shape_edit',['featMenu'=>true])->with('shape',$shape);
    }

    public function update(Request $requests,Shape $shape) {
        $shape->update(Input::all());
        return redirect('/administrator/shapes')
            ->withSuccess('shape has been updated.');
    }
}
