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

    public function size(){
        $this->hasMany('App\Size');
    }

    public function color(){
        $this->hasMany('App\Color');
    }

    public function shape(){
        $this->hasMany('App\Shape');
    }

    public function price(){
        $this->belongsTo('App\Price');
    }
}