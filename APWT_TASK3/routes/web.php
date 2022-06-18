<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

Route::get('/home', [PagesController::class, 'home'])->name('home');

Route::get('/products', [PagesController::class, 'products'])->name('products');

Route::get('/teams', [PagesController::class, 'teams'])->name('teams');

Route::get('/aboutUs', [PagesController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contactUs', [PagesController::class, 'contactUs'])->name('contactUs');
Route::post('/contactUs', [PagesController::class, 'contactUsSubmit'])->name('contactUs');

// admin route
Route::get('/adminRegistration', [AdminController::class, 'adminRegistration'])->name('adminRegistration');
Route::post('/adminRegistration', [AdminController::class, 'adminRegistrationSubmit'])->name('adminRegistration');
//admin
Route::get('/loginForm', [AdminController::class, 'loginForm'])->name('loginForm');
Route::post('/loginForm', [AdminController::class, 'loginFormSubmit'])->name('loginForm');

// user
Route::get('/userRegistration', [AdminController::class, 'userRegistration'])->name('userRegistration');
Route::post('/userRegistration', [AdminController::class, 'userRegistrationSubmit'])->name('userRegistration');

Route::get('/userLogin', [AdminController::class, 'userLogin'])->name('userLogin');
Route::post('/userLogin', [AdminController::class, 'userLoginSubmit'])->name('userLogin');
Route::get('/userDash', [AdminController::class, 'userDash'])->name('userDash')->middleware("ValidUser");
// ->middleware("ValidAdmin");
Route::get('/userLogout', [AdminController::class, 'userLogout'])->name('userLogout');

Route::get('/userUpdate', [AdminController::class, 'userUpdate'])->name('userUpdate')->middleware("ValidUser");
Route::post('/userUpdate',[AdminController::class,'userUpdateSubmitted']);
