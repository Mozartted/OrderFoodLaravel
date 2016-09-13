<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/13/16
 * Time: 4:31 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function size(){
        $this->belongsTo('App\Size');
    }

    public function feature(){
        $this->hasMany('App\Feature');
    }


}