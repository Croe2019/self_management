<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MyHomeController\MyPageController;
use App\Http\Controllers\StatusCreateController\CreateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/mypage', [MyPageController::class, 'mypage'])->name('mypage');
    Route::get('/create', [CreateController::class, 'createForm'])->name('create_form');
    Route::get('/get_events', [MyPageController::class, 'getEvent']);
});
