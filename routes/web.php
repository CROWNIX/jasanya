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

Route::get('/team',function(){
    return view('jasanyaView.team',[
        "title"=>"team"
    ]);
});

Route::get('/admin',function(){
    return view('adminView.home',[
        "title"=>"admin"
    ]);
});

Route::get('/icon',function(){
    return view('adminView.iconMdi',[
        "title"=>"icon"
    ]);
});

Route::get('/formElement',function(){
    return view('adminView.formElement',[
        "title"=>"form"
    ]);
});

Route::get('/tables',function(){
    return view('adminView.tables',[
        "title"=>"form"
    ]);
});

// Porfolio Route
Route::group(['prefix' => '/portfolio'], function () {
    Route::get('/', [C_portfolio::class, 'index']);
    Route::get('/{name}', [C_portfolio::class, 'show']);
});
