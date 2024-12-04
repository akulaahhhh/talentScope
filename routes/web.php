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
    Route::post('register', [AuthController::class, 'register_candi'])->name('register_submit');
    Route::get('register_org', [MainController::class, 'register_org'])->name('register_org');
    Route::post('register_org', [AuthController::class, 'register_org'])->name('register_org_submit');
    Route::post('login', [AuthController::class, 'login']);



    Route::middleware(['auth', 'OnlyAdmin'])->group(function () {

        // Route::get('/admin/dashboard', 'AdminController@index');
    
    });
    
    Route::middleware(['auth', 'OnlyOrganizers'])->group(function () {
    
        // Route::get('/admin/dashboard', 'AdminController@index');
    
    });
    
    Route::middleware(['auth', 'OnlyCandidates'])->group(function () {
    
        // Route::get('/admin/dashboard', 'AdminController@index');
    
    });


});




