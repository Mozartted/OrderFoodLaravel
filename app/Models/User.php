<?php
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    public function usergroup(){
        return $this->belongsTo('App\Models\UserGroup');
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
