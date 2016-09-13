<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/13/16
 * Time: 4:46 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{

    public function price(){
        return $this->belongsTo('App\Price');
    }

}