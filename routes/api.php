<?php

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\BodyInsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::post('register', [RegisterController::class, 'register']);
//Route::post('login', [RegisterController::class, 'login']);

//Route::middleware('auth:api')->group( function () {
//    Route::resource('cars', CarsController::class);
//});


//Route::post('login', 'UserController@login');
//Route::post('register', 'API\UserController@register');
//Route::group(['middleware' => 'auth:api'], function () {
//    Route::post('details', 'API\UserController@details');
//});

// user controller routes
Route::post("register", [UserController::class, "register"]);

Route::post("login", [UserController::class, "login"]);

// sanctum auth middleware routes

Route::middleware('auth:api')->group(function() {

    Route::get("user", [UserController::class, "user"]);
    Route::resource('body-ins', BodyInsController::class);

});
