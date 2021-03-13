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
use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('/api')->name('api.')->group(function () {

    Route::get('/', [ApiController::class,'index'])->name('index');
    Route::get('/{id}', [ApiController::class,'show'])->name('show');
});