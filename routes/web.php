<?php

use App\Http\Controllers\C_portfolio;
use App\Http\Controllers\C_home;
use Illuminate\Support\Facades\Route;
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
Route::group(['prefix' => '/'], function () {
    Route::get('/', [C_home::class, 'index']);
    Route::post('/kritikSaran', [C_home::class, 'kritikSaran']);
});

Route::get('/token', function () {
    return csrf_token(); 
});

Route::get('/team',function(){
    return view('jasanyaView.team',[
        "title"=>"team"
    ]);
});
// Porfolio Route
Route::group(['prefix' => '/portfolio'], function () {
    Route::get('/', [C_portfolio::class, 'index']);
    Route::get('/{name}', [C_portfolio::class, 'show']);
});
