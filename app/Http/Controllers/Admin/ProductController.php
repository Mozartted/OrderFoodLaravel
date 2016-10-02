<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/29/16
 * Time: 8:00 PM
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function _construct(){

    }

    protected function creating(Request $requests)
    {

        $product=new Product();
        $product->name=$requests['name'];
        $product->price_id=$requests['price_id'];

        $sizes=$requests['id'];
        $product->save();

        $product->size()->attach($sizes);


        return redirect('administrator/product')->withSuccess("Product created Successfully");
    }

    protected function deleted(Product $id){
        $id->delete();
        return redirect('administrator/product')
            ->withSuccess('Product has been deleted.');
    }

    public function edit(Product $product) {
        return view('admin.sections.product_edit')->with('product', $product);
    }

    public function update(Request $request,Product $product) {
        $product->update(Input::all());
        return redirect('/administrator/product')
            ->withSuccess('Product has been updated.');
    }
}