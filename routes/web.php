<?php

use App\Http\Controllers\UserController;
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
    return view('register');
});

<<<<<<< HEAD
=======
//Page d'inscription
Route::get('/register', function () {
    return view('registrations.register');
});

//Page de connection
Route::get('/login', function () {
    return view('connection.login');
});
>>>>>>> 5b137e78d64143df5272ca1231ae2d160948bcf2




