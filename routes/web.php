<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TravelLogController;

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
    return view('home', ['title' => 'Home']);
})->name('home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// Travel Log Routes
Route::get('/travel', [TravelLogController::class, 'index'])->name('travel.index');
Route::get('/travel/create', [TravelLogController::class, 'create'])->name('travel.create');
Route::post('/travel', [TravelLogController::class, 'store'])->name('travel.store');
Route::get('/travel/show/{id}', [TravelLogController::class, 'show'])->name('travel.show');
Route::get('/travel/edit/{id}', [TravelLogController::class, 'edit'])->name('travel.edit');
Route::put('/travel/update/{id}', [TravelLogController::class, 'update'])->name('travel.update');
Route::delete('/travel/{id}', [TravelLogController::class, 'delete']);