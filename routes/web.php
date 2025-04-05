<?php

use App\Http\Controllers\Admin\CaregiverController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Care\CareController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


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

// Simple-Qrcode Generator 
Route::get('/welcome', function () {
    return view('welcome');
});

// Care Pal Client Routes 

Route::middleware('ClientMiddleware')->group(function () {
    Route::get('/profile', [CareController::class, 'profile'])->name('care.profile');
    Route::post('/profile/update', [CareController::class, 'profile_update'])->name('care.profile_update');
    Route::get('/request_join', [CareController::class, 'request_join'])->name('care.request_join');
    Route::post('/request_join/store', [CareController::class, 'request_join_store'])->name('care.request_join.store');

    Route::get('/staff_profile/edit', [CareController::class, 'staff_profile_edit'])->name('care.staff_profile.edit');
    Route::post('/staff_profile/update', [CareController::class, 'staff_profile_update'])->name('care.staff_profile.update');

    Route::get('/request_service', [CareController::class, 'request_service'])->name('care.request_service');
    Route::post('/request_service/store', [CareController::class, 'request_service_store'])->name('care.request_service.store');
});
Route::get('', [CareController::class, 'index'])->name('care.index');
Route::get('/about', [CareController::class, 'about'])->name('care.about');
Route::get('/contact', [CareController::class, 'contact'])->name('care.contact');
Route::get('/services', [CareController::class, 'services'])->name('care.services');
Route::get('/staff', [CareController::class, 'staff'])->name('care.staff');
Route::get('/staff/{id}', [CareController::class, 'staff_profile'])->name('care.staff.profile');

// Use google api to sign up with gmail
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redirect.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::get('/faqs', [FaqController::class, 'faq_guest'])->name('faqs');
Route::get('/about-us', [HomeController::class, 'about_us_guest'])->name('about_us_guest');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('website.contact_us');
Route::post('/contact-us/create', [ContactUsController::class, 'store'])->name('website.contact_us.create');





// Auth Routes
Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', 'AuthController@register_page')->name('register_page');
    Route::post('/register', 'AuthController@register')->name('register');
    Route::get('/Active-Account', 'AuthController@active_account')->name('active_account');


    Route::get('/login', 'AuthController@login_page')->name('login_page');
    Route::post('/login', 'AuthController@login')->name('login');
    Route::get('/Forget-Password', 'AuthController@forget_password')->name('forget_password');
    Route::post('/New-Password', 'AuthController@new_password')->name('new_password');
});
Route::get('/logout', 'AuthController@logout')->name('logout');
