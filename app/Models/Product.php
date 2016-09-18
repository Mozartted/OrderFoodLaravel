<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/13/16
 * Time: 4:27 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function size(){
        $this->hasMany('App\Models\Size');
    }

    public function color(){
        $this->hasMany('App\Models\Color');
    }

    public function shape(){
        $this->hasMany('App\Models\Shape');
    }

    public function price(){
        $this->belongsTo('App\Models\Price');
    }
}