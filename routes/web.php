<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('index');



Route::as('talentScope.')->group(function (){
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('login', [MainController::class, 'login'])->name('login');
    Route::get('register', [MainController::class, 'register_candi'])->name('register_candi');
    Route::get('register_org', [MainController::class, 'register_org'])->name('register_org');
    Route::post('login', [AuthController::class, 'login']);

});
