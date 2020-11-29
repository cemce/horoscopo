<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;


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

Route::get('/signs',[SignController::class,'index'])->name('sign.index');
Route::get('/signs/{id}',[SignController::class,'show'])->name('sign.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/layout/landing', function () {
    return view('signs.show');
});
/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

