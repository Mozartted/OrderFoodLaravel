<?php
/**
 * Created by PhpStorm.
 * User: mozart
 * Date: 9/20/16
 * Time: 12:50 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $fillable=['title','pic_location','note'];
    protected $table='gallery';



}