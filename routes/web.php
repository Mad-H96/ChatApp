<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// route for home page
Route::get('/',[HomeController::class,'index'] );

// route for show message
Route::get('/message/{message}',[HomeController::class,'view'] )->name('message.view');

// route for save messages
Route::post('/messages',[HomeController::class,'save'] )->name('message.save');
