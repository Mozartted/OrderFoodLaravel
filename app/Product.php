<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/13/16
 * Time: 4:27 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['product_name'];
    public function size(){
        $this->hasMany('App\Size');
    }

    public function color(){
        $this->hasMany('App\Color');
    }

}