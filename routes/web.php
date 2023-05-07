<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/contact', function () {
    return view('contact');
    })->name('contact');

    Route::get('/', function () {
        return view('contact');
        })->name('contact');

    Route::get('/contact/submit', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
    Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');


    