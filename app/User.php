<?php
namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticableContract
{
    use Authenticatable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    public $timestamps=false;
   protected $fillable = [
        'name', 'email', 'password','user_group'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function usergroup(){
        return $this->belongsTo('App\UserGroup','user_group');
    }

    /**
     * Determine if a user is an administrator level and should be allowed to create other user
     *return boolean
     */
    public function isAdminlevel(){
        $level=$this->user_group;
        if($level==1){
            return true;
        }else{
            return false;
        }
    }

    public function userLevel(){
        $group_level=$this->usergroup()->where('id','=',$this->user_group);
        return $group_level;
    }



}
