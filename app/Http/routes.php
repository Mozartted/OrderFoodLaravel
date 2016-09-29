<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['namespace' => 'Home'], function () {
    Route::get('/', ['uses' => 'ViewsController@home']);

    Route::get('/gallery', ['uses' => 'ViewsController@gallery']);

    Route::get('/service',['uses' => 'ViewsController@service']);

    Route::get('/about',['uses' => 'ViewsController@about']);

    Route::get('/contact',['uses' => 'ViewsController@service']);

    Route::get('/team',['uses' => 'ViewsController@team']);

    Route::get('/login',['uses' => 'AuthLoginController@login']);



//Route::auth();

    Route::get('/home', 'HomeController@index');


});

Route::get('/login',['as'=>'login_pathh','uses' => 'Auth\AuthLoginController@login']);
Route::post('/login',['as'=>'login_path','uses'=>'Auth\AuthLoginController@BeginSession']);
Route::get('/logout',['uses' => 'Auth\AuthLoginController@logout']);

Route::group(['prefix'=>'administrator','namespace'=>'Admin','middleware'=>'auth'],function(){
    Route::get('/',['as'=>'administrator','uses' => 'DashboardController@dashboard']);
    Route::get('/users',['as'=>'users_admin','uses'=>'DashboardController@users_view']);
    Route::get('/product',['as'=>'product_admin','uses'=>'DashboardController@product_view']);
    Route::get('/features',['as'=>'features_admin','uses'=>'DashboardController@features_view']);
    Route::get('/orders',['as'=>'orders_admin','uses'=>'DashboardController@orders_view']);
    Route::get('/blog',['as'=>'blog_admin','uses'=>'DashboardController@blog_view']);
    Route::get('/messages',['as'=>'messages_admin','uses'=>'DashboardController@messages_view']);
    Route::get('/forum',['as'=>'forum_admin','uses'=>'DashboardController@forum_view']);
    Route::delete('/user/{id}/delete',['as'=>'user.delete','uses'=>'UserController@deleted']);
    Route::post('/user/create/',['as'=>'new_user','uses'=>'UserController@creating']);
    Route::get('/user/{user}/edit',['as'=>'edit', 'uses'=>'UserController@edit']);
    Route::put('/user/{user}/update',['as'=>'update', 'uses'=>'UserController@update']);
});