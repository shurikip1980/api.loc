<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'RegisterController');
        Route::post('login', 'LoginController');
        Route::post('logout', 'LogoutController')->middleware('auth:api');
    });
});



//Route::get('/user', function () {
//    return new UserResource(User::find(1));
//    return UserResource::collection(User::all());
//    return UserResource::collection(User::paginate());
//    return new UserCollection(User::paginate());
//});

//Route::get('/', 'Api\HomeController@index')->name('home');
