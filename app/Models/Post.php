<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/20/16
 * Time: 12:48 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable=['title','content','image'];

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }

}