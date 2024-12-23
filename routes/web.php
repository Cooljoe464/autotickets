<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes([
    'login'=>false,
    'register'=>false,
    'home'=>false,
]);

//Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/viewersRegister', [TicketsController::class, 'viewers'])->name('viewers');
Route::get('/gocartRegister', [TicketsController::class, 'racers'])->name('racers');
