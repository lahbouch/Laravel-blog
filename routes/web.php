<?php

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
})->name("home");


Route::get('/home', function () {
    return view('home');
})->name("home");


Route::get('/dashboard', function () {
    return view('dashboard');
})->name("dashboard");


Route::get('/post', function () {
    return view('post');
})->name("post");


Route::get('/login', function () {
    return view('login');
})->name("login");


Route::get('/register', function () {
    return view('register');
})->name("register");


Route::get('/logout', function () {
    return view('logout');
})->name("logout");


Route::get('/profil', function () {
    return view('profil');
})->name("profil");
