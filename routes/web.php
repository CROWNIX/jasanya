<?php

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

Route::get('/', function () {
    return view('jasanyaView.home',[
        "title"=>"home"
    ]);
});

Route::get('/about',function(){
    return view('jasanyaView.about',[
        "title"=>"about"
    ]);
});

Route::get('/service',function(){
    return view('jasanyaView.service',[
        "title"=>"service"
    ]);
});

Route::get('/project',function(){
    return view('jasanyaView.project',[
        "title"=>"project"
    ]);
});

// Route::get('home',[pageController::class,'landingPageHome']);
// Route::get('about',[pageController::class,'landingPageAbout']);

