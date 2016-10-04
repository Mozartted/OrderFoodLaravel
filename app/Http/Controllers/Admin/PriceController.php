<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Models\Price;


class PriceController extends Controller
{
    public function _construct(){

    }

    protected function creating(Request $requests)
    {

        Price::create([
                'amount' => $requests['amount'],
            ]
        );


        return redirect('administrator/prices')->withSuccess("Price created Successfully");
    }

    protected function deleted(Price $id){
        $id->delete();
        return redirect('administrator/prices')
            ->withSuccess('Price has been deleted.');
    }

    public function edit(Price $price) {

        return view('admin.sections.price_edit',['featMenu'=>true])->with('price',$price);
    }

    public function update(Request $requests,Price $price) {
        $price->update(Input::all());
        return redirect('/administrator/prices')
            ->withSuccess('price has been updated.');
    }
}
