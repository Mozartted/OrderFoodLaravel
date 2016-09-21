<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/20/16
 * Time: 12:48 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        return $this->belongsTo('App\Models\Post');
    }

}