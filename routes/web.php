<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
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
Route::get ('/loginForm', [Login::class, 'index'])->name ('loginForm');
Route::post ('/login', [Login::class, 'login'])->name ('login');
Route::get ('/home', [Home::class, 'index'])->name ('home');
