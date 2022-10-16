<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\EmailUsController;
use App\Http\Controllers\CallUsController;
use App\Http\Controllers\TimeWorkController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MessageController;
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
//Route Page
Route::get('/',[PageController::class, 'page'])->middleware('guest');

//Route Post Message
Route::post('/post/message',[MessageController::class, 'post_message'])->middleware('guest');
Route::get('/message',[MessageController::class, 'get_message'])->middleware('auth');

Route::get('login',[LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/post/auth',[LoginController::class, 'post_auth'])->middleware('guest');
Route::get('logout',[LoginController::class, 'logout'])->middleware('auth');
Route::post('/update/avatar',[LoginController::class, 'update_avatar'])->middleware('auth');
Route::get('/updated/password',[LoginController::class, 'updated_password'])->middleware('auth');
Route::put('/post/updated/password',[LoginController::class, 'post_update_password'])->middleware('auth');

//Route User profil
Route::get('/user/profil',[LoginController::class, 'user_profil'])->middleware('auth');
Route::patch('/update/profil',[LoginController::class, 'update_profil'])->middleware('auth');


Route::get('lang/{locale}', [LocalizationController::class, 'tlanset'])->middleware('auth');



Route::get('home',[HomeController::class, 'home'])->middleware('auth')->middleware('auth');

//Route About
Route::get('/master/about',[AboutController::class, 'about'])->middleware('auth')->middleware('auth');
Route::post('/update/image/about/{id}',[AboutController::class, 'update_image_about'])->middleware('auth');

//Route Service
Route::get('/master/service',[ServiceController::class, 'service'])->middleware('auth');
Route::post('/update/image/service/{id}',[ServiceController::class, 'update_image_service'])->middleware('auth');


//Route Vision & Mision
Route::get('/master/vm',[VisionController::class, 'vision'])->middleware('auth');
Route::post('/update/image/vision/{id}',[VisionController::class, 'update_image_vision'])->middleware('auth');

//Route address
Route::get('/master/our/address',[AddressController::class, 'address'])->middleware('auth');
Route::post('/update/our/address/{id}',[AddressController::class, 'update_address'])->middleware('auth');

//Route Email Us
Route::get('/master/email/us',[EmailUsController::class, 'email_us'])->middleware('auth');
Route::post('/update/email/us/{id}',[EmailUsController::class, 'update_email_us'])->middleware('auth');

//Route Call Us
Route::get('/master/call/us',[CallUsController::class, 'call_us'])->middleware('auth');
Route::post('/update/call/us/{id}',[CallUsController::class, 'update_call_us'])->middleware('auth');

//Route Time Work
Route::get('/master/time/work',[TimeWorkController::class, 'time_work'])->middleware('auth');
Route::post('/update/time/work/{id}',[TimeWorkController::class, 'update_time_work'])->middleware('auth');

//Route Map
Route::get('/master/maps',[MapController::class, 'maps'])->middleware('auth');
Route::post('/update/map/{id}',[MapController::class, 'update_maps'])->middleware('auth');



