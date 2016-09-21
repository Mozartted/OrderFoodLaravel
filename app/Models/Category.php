<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/20/16
 * Time: 12:49 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $timestamps=false;
    protected $table='categories';

    public function galleria(){
        return $this->belongsToMany('App\Models\Gallery','gallery_category','category_id','gallery_id');
    }
}