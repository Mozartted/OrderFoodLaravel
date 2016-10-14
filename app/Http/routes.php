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
    Route::get('/shapes',['as'=>'shapes_admin','uses'=>'DashboardController@shapes_view']);
    Route::get('/flavours',['as'=>'flavours_admin','uses'=>'DashboardController@flavours_view']);
    Route::get('/icings',['as'=>'icings_admin','uses'=>'DashboardController@icings_view']);
    Route::get('/prices',['as'=>'prices_admin','uses'=>'DashboardController@prices_view']);
    Route::get('/sizes',['as'=>'sizes_admin','uses'=>'DashboardController@sizes_view']);

    Route::get('/orders',['as'=>'orders_admin','uses'=>'DashboardController@orders_view']);
    Route::get('/blog',['as'=>'blog_admin','uses'=>'DashboardController@blog_view']);
    Route::get('/gallery',['as'=>'gallery_admin','uses'=>'DashboardController@gallery_view']);
    Route::get('/messages',['as'=>'messages_admin','uses'=>'DashboardController@messages_view']);
    Route::get('/forum',['as'=>'forum_admin','uses'=>'DashboardController@forum_view']);

    Route::delete('/user/{id}/delete',['as'=>'user.delete','uses'=>'UserController@deleted']);
    Route::post('/user/create/',['as'=>'new_user','uses'=>'UserController@creating']);
    Route::get('/user/{user}/edit',['as'=>'edit', 'uses'=>'UserController@edit']);
    Route::put('/user/{user}/update',['as'=>'update', 'uses'=>'UserController@update']);

    Route::post('/product/create/',['as'=>'new_product','uses'=>'ProductController@creating']);
    Route::delete('/product/{id}/delete',['as'=>'product.delete','uses'=>'ProductController@deleted']);
    Route::get('/product/{product}/edit',['as'=>'edit', 'uses'=>'ProductController@edit']);
    Route::put('/product/{product}/update',['as'=>'update', 'uses'=>'ProductController@update']);

    Route::post('/feature/create/',['as'=>'new_feature','uses'=>'FeatureController@creating']);
    Route::delete('/feature/{id}/delete',['as'=>'feature.delete','uses'=>'FeatureController@deleted']);
    Route::get('/feature/{feature}/edit',['as'=>'edit', 'uses'=>'FeatureController@edit']);
    Route::put('/feature/{feature}/update',['as'=>'update', 'uses'=>'FeatureController@update']);

    Route::post('/shape/create/',['as'=>'new_shape','uses'=>'ShapeController@creating']);
    Route::delete('/shape/{id}/delete',['as'=>'shape.delete','uses'=>'ShapeController@deleted']);
    Route::get('/shape/{shape}/edit',['as'=>'edit', 'uses'=>'ShapeController@edit']);
    Route::put('/shape/{shape}/update',['as'=>'update', 'uses'=>'ShapeController@update']);

    Route::post('/flavour/create/',['as'=>'new_flavour','uses'=>'FlavourController@creating']);
    Route::delete('/flavour/{id}/delete',['as'=>'flavour.delete','uses'=>'FlavourController@deleted']);
    Route::get('/flavour/{flavour}/edit',['as'=>'edit', 'uses'=>'FlavourController@edit']);
    Route::put('/flavour/{flavour}/update',['as'=>'update', 'uses'=>'FlavourController@update']);

    Route::post('/icing/create/',['as'=>'new_icing','uses'=>'IcingController@creating']);
    Route::delete('/icing/{id}/delete',['as'=>'icing.delete','uses'=>'IcingController@deleted']);
    Route::get('/icing/{icing}/edit',['as'=>'edit', 'uses'=>'IcingController@edit']);
    Route::put('/icing/{icing}/update',['as'=>'update', 'uses'=>'IcingController@update']);

    Route::post('/price/create/',['as'=>'new_price','uses'=>'PriceController@creating']);
    Route::delete('/price/{id}/delete',['as'=>'price.delete','uses'=>'PriceController@deleted']);
    Route::get('/price/{price}/edit',['as'=>'edit', 'uses'=>'PriceController@edit']);
    Route::put('/price/{price}/update',['as'=>'update', 'uses'=>'PriceController@update']);

    Route::post('/size/create/',['as'=>'new_size','uses'=>'SizeController@creating']);
    Route::delete('/size/{id}/delete',['as'=>'size.delete','uses'=>'SizeController@deleted']);
    Route::get('/size/{size}/edit',['as'=>'edit', 'uses'=>'SizeController@edit']);
    Route::put('/size/{size}/update',['as'=>'update', 'uses'=>'SizeController@update']);

    Route::get('/blog/new',['as'=>'new_blog','uses'=>'DashboardController@newBlogPost']);
    Route::post('/blog/create/',['as'=>'new_post','uses'=>'BlogController@creating']);
    Route::delete('/blog/{id}/delete',['as'=>'post.delete','uses'=>'BlogController@deleted']);
    Route::get('/blog/{post}/edit',['as'=>'edit', 'uses'=>'BlogController@edit']);
    Route::put('/blog/{post}/update',['as'=>'update', 'uses'=>'BlogController@update']);


    //the gallery section Views
    Route::get('/gallery/new',['as'=>'new_blog','uses'=>'DashboardController@newGalleryPost']);
    Route::post('/gallery/create/',['as'=>'new_gallery','uses'=>'GalleryController@creating']);
    Route::delete('/gallery/{id}/delete',['as'=>'gallery.delete','uses'=>'GalleryController@deleted']);
    Route::get('/gallery/{gallery}/edit',['as'=>'edit', 'uses'=>'GalleryController@edit']);
    Route::put('/gallery/{gallery}/update',['as'=>'update', 'uses'=>'GalleryController@update']);

});