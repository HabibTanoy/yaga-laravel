<?php

use Illuminate\Support\Facades\Route;



Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::namespace('App\Http\Controllers')->group(function () {
    Route::resources([
        'slider' => SliderController::class,
    ]);
    Route::resource('client-feedback', ClientFeedbackController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('about', AboutController::class);
    Route::resource('brand', BrandController::class);

    Route::get('/dashboard', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@fronted')->name('frontend');
    Route::get('/about-show', 'FrontendViewController@about')->name('about');
    Route::get('/services', 'FrontendViewController@service')->name('service');
    Route::get('/contact', 'FrontendViewController@contact')->name('contact');
    Route::post('/contact-us', 'FrontendViewController@contact_us')->name('contact-us');
    Route::get('/feature', 'FrontendViewController@feature')->name('feature');
    Route::get('/teams', 'FrontendViewController@teams')->name('teams');
    Route::get('/testimonial', 'FrontendViewController@testimonial')->name('testimonial');
    Route::get('/quote', 'FrontendViewController@quote')->name('quote');
    Route::post('/email', 'HomeController@email_feedback')->name('email');
    Route::get('/get-in-touch', 'FrontendViewController@get_in_touch')->name('get_in_touch');
    Route::put('/get-in-touch', 'FrontendViewController@get_in_touch_store')->name('get_in_touch_store');
    Route::get('/projects', 'FrontendViewController@project_complete')->name('project');
    Route::put('/projects', 'FrontendViewController@project_complete_store')->name('project_store');
});


