<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);

Route::POST('contact', 'MessageController@store')->name('contact.store');
Auth::routes();