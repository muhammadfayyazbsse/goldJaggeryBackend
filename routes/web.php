<?php

use App\Http\Controllers\Backend\AuthController;
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

    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/blog', function () {
        return view('blog');
    })->name('blog');
    Route::get('/blog-detail', function () {
        return view('bloginner');
    })->name('bloginner');
    Route::get('/contact-us', function () {
        return view('contact-us');
    })->name('contact-us');
    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');
    Route::get('/inner-product', function () {
        return view('inner-product');
    })->name('inner-product');
    Route::get('/invest-in-farmers', function () {
        return view('invest-in-farmers');
    })->name('invest-in-farmers');
    Route::get('/our-story', function () {
        return view('our-story');
    })->name('our-story');
    Route::get('/privacy-policy', function () {
        return view('privacy-policy');
    })->name('privacy-policy');
    Route::get('/recipes', function () {
        return view('recipes');
    })->name('recipes');
    Route::get('/shop', function () {
        return view('shop');
    })->name('shop');
    Route::get('/show', function () {
        return view('show');
    })->name('show');

Route::middleware(['guest'])->group(function () {
Route::get('login',[AuthController::class, 'login'])->name('login');
Route::post('login',[AuthController::class, 'customLogin'])->name('doLogin');
Route::get('register',[AuthController::class, 'register'])->name('register');
Route::post('register',[AuthController::class, 'customRegistration'])->name('doRegister');
});

Route::group(['private','middleware'=>['auth']], function () {
    Route::get('logout',[AuthController::class, 'logout'])->name('logout');
});
