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
    public $timestamps=false;
    protected $fillable = [
        'name','price_id'
    ];
    
    public function size(){
        return $this->hasMany('App\Models\Size','products_sizes','product_id','size_id');
    }

    public function color(){
        return $this->hasMany('App\Models\Color');
    }

    public function shape(){
        return $this->hasMany('App\Models\Shape');
    }

    public function price(){
        return $this->belongsTo('App\Models\Price','price_id');
    }
}