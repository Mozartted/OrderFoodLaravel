<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/13/16
 * Time: 4:50 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    public function product(){
        $this->hasMany('App\Product');
    }
}