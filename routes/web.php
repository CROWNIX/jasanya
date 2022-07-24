<?php

use App\Http\Controllers\C_portfolio;
use App\Http\Controllers\C_home;
use App\Http\Controllers\C_admin;
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
// jasanya view route
Route::group(['prefix' => '/'], function () {
    Route::get('/', [C_home::class, 'index']);
    Route::post('/kritikSaran', [C_home::class, 'kritikSaran']);
});

// admin view route
Route::group(['prefix' => '/'], function () {
    Route::get('/admin', [C_admin::class, 'home']);
    Route::get('/kritikSaran', [C_admin::class, 'getKritikSaran']);
    Route::resource('adminView', C_admin::class);
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
