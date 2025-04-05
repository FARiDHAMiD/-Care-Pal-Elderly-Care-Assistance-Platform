<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'admin']], function () {
    Route::resource('/admins', 'AdminController');

    Route::resource('/services', 'ServiceController');
    Route::resource('/caregivers', 'CaregiverController');
    Route::resource('/jobs', 'JobController');

    Route::get('/admin/client-profile/{id}', 'AdminController@client_profile')->name('admin.client_profile');


    Route::get('/caregivers/activate/{id}', 'CaregiverController@activate')->name('caregiver.activate');
    Route::get('/caregivers/deactivate/{id}', 'CaregiverController@deactivate')->name('caregiver.deactivate');

    Route::get('/clients', 'AdminController@clients')->name('admin.clients');
    Route::get('admin-mark-notification-as_readed', 'HomeController@ReadNotification')->name('admin-mark-notification-as_readed');
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('export-application', 'HomeController@export_application');
    Route::get('/AboutUs', 'HomeController@about_us')->name('AboutUs.index');
    Route::post('/AboutUs-Update',  'HomeController@about_us_update')->name('AboutUsUpdate');

    Route::resource('/faqs', 'FaqController');

    Route::get('/logout', 'AuthController@logout')->name('admin.logout');
});



Route::group(['middleware' => ['web']], function () {
    Route::get('/login', 'AuthController@login')->name('admin.login');
    Route::post('/login', 'AuthController@login_auth')->name('admin.login.auth');
});
