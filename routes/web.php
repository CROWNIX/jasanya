<?php

use App\Http\Controllers\C_portfolio;
use App\Http\Controllers\C_home;
use App\Http\Controllers\C_kritikSaran;
use App\Http\Controllers\C_team;
use App\Http\Controllers\C_jobdesk;
use App\Http\Controllers\C_layanan;
use App\Http\Controllers\C_project;
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
    Route::resource('adminView', C_kritikSaran::class);
    Route::post('/kritikSaran', [C_kritikSaran::class, 'kritikSaran']);
    Route::get('/admin', [C_kritikSaran::class, 'home']);
    Route::get('/kritikSaran', [C_kritikSaran::class, 'getKritikSaran']);

    // jobdesk
    Route::get('/addJobdesk', [C_jobdesk::class, 'formAddJobdesk']);
    Route::resource('R_jobdesk', C_jobdesk::class);

    // team
    Route::resource('R_team', C_team::class);
    Route::get('/addTeam', [C_team::class, 'F_A_team']);
    Route::get('/detailTeam/{id}', [C_team::class, 'detailTeam']);

    // layanan
    Route::resource('R_layanan', C_layanan::class);
    Route::get('/addlayanan', [C_layanan::class, 'formAddLayanan']);

    // project
    Route::resource('R_project', C_project::class);
    Route::get('/addProject', [C_project::class, 'addProject']);
});

// Route::get('/token',function(){
//     return csrf_token(); 
// });


// Porfolio Route
Route::group(['prefix' => '/portfolio'], function () {
    Route::get('/', [C_portfolio::class, 'index']);
    Route::get('/{name}', [C_portfolio::class, 'show']);
});
