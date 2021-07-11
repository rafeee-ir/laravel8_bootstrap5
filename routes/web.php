<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BodyInsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
//$client = new GuzzleHttp\Client();
//$response = $client->post('https://mdapp.kins.ir/cins/login', [
//    'auth' => [
//        'e.merkori',
//        'mermercury17031400'
//    ]
//]);
//$response = $client->get('https://mdapp.kins.ir/cins/rest/anvaGhataatKhodro/findByFilter');
//dd($response);
//$headers = [
//    'Content-Type' => 'application/x-www-form-urlencoded',
//];
//$client = new GuzzleClient([
//    'headers' => $headers
//]);
//
//$body = '{
//"username" : "s.bakhshi",
//"password" : "QWE!@#qwe123",
//"grant_type" : "password"
//}';
//$r = $client->request('POST', 'https://mdapp.kins.ir/cins/login', [
//    'body' => $body
//]);
//$response = $r->getBody()->getContents();
//dd($response);
//$resp = Http::withHeaders([
//    'Content-Type' => 'application/x-www-form-urlencoded'
//])->post('https://mdapp.kins.ir/cins/login',[
//    'grant_type' => 'password',
//    'password' => 'mermercury17031400',
//    'username' => 'e.merkori'
//]);
//$resp = Http::withDigestAuth('e.merkori','mermercury17031400')->post('https://mdapp.kins.ir/cins/login');
//$resp = Http::get('https://mdapp.kins.ir/cins/rest/anvaGhataatKhodro/findByFilter');
//dd($resp->body());
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::prefix('ins')->group(function () {
        Route::get('/body', [BodyInsController::class, 'index'])->name('admin.panel');
    });
});

