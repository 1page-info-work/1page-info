<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ {RegisterController};
use App\Http\Controllers\Auth\ {LoginController};
use App\Http\Controllers\User\ {HomePageController};
use App\Http\Controllers\Page\{MainPageController};
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

Route::get('/', [HomePageController::class,'index']);
Route::post('thingsDetails', [HomePageController::class,'thingsDetails'])->name('1page.things.details');
// Auth Credential
Route::get('/register', [RegisterController::class,'register'])->name('user.register');
Route::post('/register/create', [RegisterController::class,'create'])->name('user.register.create');

// Login Part 
Route::get('/login', [LoginController::class,'login'])->name('user.login');
Route::post('/login/create', [LoginController::class,'create'])->name('user.login.create');

// Logout
Route::get('/logout', [LoginController::class,'logout'])->name('user.logout');
// Page
Route::get('/1page', [MainPageController::class,'index'])->name('1page'); 
Route::post('/1page/create', [MainPageController::class,'create'])->name('1page.create');
Route::post('/1page/store', [MainPageController::class,'store'])->name('1page.store'); 
// end Page
// famous people
Route::post('/1page/famous/people/{name}', [MainPageController::class,'store'])->name('1page.famous.people'); 