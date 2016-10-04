<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/13/16
 * Time: 4:31 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public $timestamps=false;

    protected $fillable=['amount'];


    public function product(){
        $this->hasMany('App\Models\Products');
    }

}