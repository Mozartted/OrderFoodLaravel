<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/20/16
 * Time: 12:52 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table='user_group';

    public function user(){
        return $this->hasMany('App\User');
    }
}