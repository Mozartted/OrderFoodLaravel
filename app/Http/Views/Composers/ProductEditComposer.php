<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 10/2/16
 * Time: 11:16 PM
 */

namespace App\Http\Views\Composers;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Contracts\View\View;

class ProductEditComposer
{
    protected $users;
    public function __construct(Product $product) {
        $this->product = $product;
    }
    public function compose(View $view) {
        $view->with('sizes', Size::all());
    }

}