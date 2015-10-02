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
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', function () {
    return view('pages.home');
});

Route::get('home', function(){
    return redirect('/');
});

//Route::resource('product', 'ProductController', ['except' => 'index']);
//Route::get('products', 'ProductController@index');
Route::resource('user', 'UserController', ['except' => 'index']);






// access for Site admin
Route::group(['middleware' => ['auth', 'acl:admin_all']], function () {
    Route::get('users',['as' => 'user.all', 'uses' => 'UserController@index']);
    Route::resource('product', 'ProductController', ['except' => ['index', 'show']]);
});

// access for authorized users
Route::group(['middleware' => 'auth'], function(){
    Route::get('products', 'ProductController@index');
    Route::get('product/oil', [ 'as' => 'oils',  'uses' => 'ProductController@oilFilter']);
    Route::get('product/liquids',['as' => 'liquids', 'uses' => 'ProductController@liquidsFilter' ]);
    Route::get('product/pvl',['as' => 'PVL', 'uses' => 'ProductController@PVLFilter' ]);
    Route::get('product/cvl',['as' => 'CVL', 'uses' => 'ProductController@CVLFilter' ]);
    Route::get('product/ind',['as' => 'IND', 'uses' => 'ProductController@INDFilter' ]);
    Route::get('product/g-family',['as' => 'g-family', 'uses' => 'ProductController@gFamilyFilter' ]);
    Route::get('product/gazpromneft',['as' => 'gazpromneft', 'uses' => 'ProductController@gazpromneftFilter' ]);
    Route::get('product/{id}', 'ProductController@show');

    //Route::get('/feedback', ['as' => 'feedback', 'uses' => 'UserController@feedback']);
    Route::get('/feedback', 'UserController@feedback');
});

/*Route::get('/users', [
    'middleware' => ['auth', 'acl:admin_all'],
    'as' => 'users.all',
    'uses' => 'UserController@index'
]);*/
