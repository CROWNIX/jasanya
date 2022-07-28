<?php

use App\Http\Controllers\C_portfolio;
use App\Http\Controllers\C_home;
use App\Http\Controllers\C_kritikSaran;
use App\Http\Controllers\C_team;
use App\Http\Controllers\C_jobdesk;
use App\Http\Controllers\C_layanan;
use App\Http\Controllers\C_project;
use App\Http\Controllers\C_login;
use App\Http\Controllers\C_register;
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
    Route::get('/team', [C_home::class, 'team']);
    
});

// admin view route
Route::group(['prefix' => '/'], function () {
    // kritik saaran
    Route::resource('adminView', C_kritikSaran::class)->middleware('auth');
    Route::post('/kritikSaran', [C_kritikSaran::class, 'kritikSaran']);
    Route::get('/admin', [C_kritikSaran::class, 'home'])->middleware('auth');
    Route::get('/kritikSaran', [C_kritikSaran::class, 'getKritikSaran'])->middleware('auth');

    // jobdesk
    Route::get('/addJobdesk', [C_jobdesk::class, 'formAddJobdesk'])->middleware('auth');
    Route::resource('R_jobdesk', C_jobdesk::class)->middleware('auth');

    // team
    Route::resource('R_team', C_team::class)->middleware('auth');
    Route::get('/addTeam', [C_team::class, 'F_A_team'])->middleware('auth');
    Route::get('/detailTeam/{id}', [C_team::class, 'detailTeam'])->middleware('auth');

    // layanan
    Route::resource('R_layanan', C_layanan::class)->middleware('auth');
    Route::get('/addlayanan', [C_layanan::class, 'formAddLayanan'])->middleware('auth');

    // project
    Route::resource('R_project', C_project::class);
    Route::get('/addProject', [C_project::class, 'addProject'])->middleware('auth');
});

// Route::get('/token',function(){
//     return csrf_token(); 
// });

// login
Route::group(['prefix' => '/'], function () {
    Route::resource('/R_login', C_login::class);
    Route::resource('/R_register', C_register::class)->middleware('auth');
    Route::post('/logout', [C_login::class, 'logout']);
});

// Route::get('/register',function(){
//     return view('adminView.register'); 
// });


// Porfolio Route
Route::group(['prefix' => '/portfolio'], function () {
    Route::get('/', [C_portfolio::class, 'index']);
    Route::get('/{name}', [C_portfolio::class, 'show']);
});