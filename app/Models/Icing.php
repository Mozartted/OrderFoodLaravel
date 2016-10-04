<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/13/16
 * Time: 4:50 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Icing extends Model
{
    public $timestamps=false;
    protected $fillable=['name'];

    public function product(){
        $this->hasMany('App\Models\Product');
    }

}