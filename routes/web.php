<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DailyList;

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
//todo middleware
Route::get ('/loginForm', [Login::class, 'index'])->name ('loginForm');
Route::post ('/login', [Login::class, 'login'])->name ('login');
Route::delete ('/deleteList/{id}', [DailyList::class, 'destroy'])->name ('deleteList');
Route::get ('/home', [Home::class, 'index'])->name ('home');
Route::get ('/createListForm', [DailyList::class, 'create'])->name ('createListForm');
Route::post ('/createList', [DailyList::class, 'store'])->name ('createList');
Route::get ('/editListForm/{id}', [DailyList::class, 'edit'])->name ('editListForm');
Route::put ('/editList/{id}', [DailyList::class, 'update'])->name ('editList');

