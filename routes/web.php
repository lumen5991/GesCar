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

//Page d'acceuil
Route::get('/', function () {
    return view('homePage.home');
});

//Page d'inscription
Route::get('/register', function () {
    return view('registrations.register');
});

//Page de connection
Route::get('/login', function () {
    return view('connection.login');
});




