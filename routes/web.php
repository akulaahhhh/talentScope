<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\Organization\ProfileSettingController;
use App\Http\Middleware\OnlyOrganizers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

// The Email Verification Notice
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//The Email Verification Handler
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect()->route('talentScope.login');
})->middleware(['auth', 'signed'])->name('verification.verify');

// The email verification handle jugak but auto login
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     // Automatically log in the user
//     $user = $request->user();
//     Auth::login($user);

//     // Redirect to a desired page after login
//     return redirect()->route('dashboard');
// })->middleware(['auth', 'signed'])->name('verification.verify');

// RESEND EMAIL FUNCTION
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('success', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::as('talentScope.')->group(function (){
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::get('login', [MainController::class, 'login'])->name('login');
    Route::get('register', [MainController::class, 'register_candi'])->name('register_candi');
    Route::post('register', [AuthController::class, 'register_candi'])->name('register_submit');
    Route::get('register_org', [MainController::class, 'register_org'])->name('register_org');
    Route::post('register_org', [AuthController::class, 'register_org'])->name('register_org_submit');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');


    Route::middleware(['onlyAdmin'])->group(function () {
        // Route::get('/admin/dashboard', 'AdminController@index');
    
    });
    
    Route::group([
        'prefix' => 'organizer_dashboard',
        'as' => 'organizer_dashboard.',
        'middleware' => [OnlyOrganizers::class]
    ], function () {
        
        Route::get('/', [OrgController::class, 'index'])->name('organizer_dashboard');
        Route::get('upload-event', [OrgController::class, 'view_upload_event'])->name('view_upload_event');
        Route::get('profile-setting', [OrgController::class, 'view_profile_setting'])->name('view_profile_setting');
        Route::post('update-profile-setting', [ProfileSettingController::class, 'update_profile_setting'])->name('update_profile_setting');
        Route::post('change-password', [ProfileSettingController::class, 'update_password_org'])->name('update_password_org');


    });
    // Route::middleware(['onlyOrg'])->group(function () {
    // });
    
    Route::middleware(['onlyCandi', 'verified'])->group(function () {
        // Route::get('/', [MainController::class, 'index'])->name('index');
    
        // Route::get('/admin/dashboard', 'AdminController@index');
    
    });


});




