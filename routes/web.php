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

Route::get('/', function () {
    return view('landing_page.content.home');
})->name('home');
Route::get('/profile', function () {
    return view('landing_page.content.profile');
});
Route::get('/panduan', function () {
    return view('landing_page.content.panduan');
});
Route::get('/aduan', function () {
    return view('landing_page.content.aduan');
});
Route::get('/event', function () {
    return view('landing_page.content.event');
});
