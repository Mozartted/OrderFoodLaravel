<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/13/16
 * Time: 4:17 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable=['name','date_of_birth','breed_id'];

    public function products(){
        return $this->hasMany('App\Product');
    }
}