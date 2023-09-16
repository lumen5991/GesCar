<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ModeleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoitureController;
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


Route::controller(UserController::class)->prefix('user')->group(function(){

    Route::get('/register', 'register')->name('register');

    Route::get('/login', 'login')->name('login');

    Route::post('/send_register/register', 'send_register')->name('send_register');

    Route::get('/verify_email/{email}', 'verify')->name('email_verified');

    Route::post('/authentification/login', 'authentification')->name('authentification');

    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(ClientController::class)->middleware('auth')->prefix('client')->group(function(){
    
    Route::get('/customers', 'customers')->name('customers');

    Route::get('/addcusto', 'addcusto')->name('addcusto');

    Route::post('/send_customers/addcusto', 'send_customers')->name('send_customers');

    Route::get('/modifycusto/{id_client}', 'modifycusto')->name('modifycusto');

    Route::post('/modifyCustomersInfo/modifycusto/{id_client}', 'modifyCustomersInfo')->name('modifyCustomersInfo');
});

Route::controller(VoitureController::class)->middleware('auth')->prefix('voiture')->group(function(){
    
    Route::get('/cars', 'cars')->name('cars');
    
    Route::get('/addcar', 'addcar')->name('addcar');

    Route::get('/seeMore', 'seeMore')->name('seeMore');

  

});

Route::controller(LocationController::class)->middleware('auth')->prefix('location')->group(function(){

});

Route::controller(MarqueController::class)->middleware('auth')->prefix('marque')->group(function(){

    Route::get('/brand', 'brand')->name('brand');

    Route::get('/modifyBrand', 'modifyBrand')->name('modifyBrand');

});

Route::controller(ModeleController::class)->middleware('auth')->prefix('modele')->group(function(){

    Route::get('/model', 'model')->name('model');

    Route::get('/modifyModel', 'modifyModel')->name('modifyModel');
});

Route::controller(CategorieController::class)->middleware('auth')->prefix('categorie')->group(function(){

Route::get('/category', 'category')->name('category');

Route::get('/modifyCategory', 'modifyCategory')->name('modifyCategory');

});

