<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

//Route::get('/', function () {
    /*return view('welcome');*/
	/*return view('index');*/
    /*change to home*/
    //return view('home');
//});
//more
Route::get('/', [HomeController::class, 'index']);
//end more
Route::get('/shop', function () {
	return view('shop');
});
Route::get('/contact', function () {
	return view('contact');
});

//Route::get('/admins', function () {
//	return view('admin.desboard');
//});
Route::get('/admins', [AdminController::class, 'index'])->middleware('is_admin');
//Route::get('/login', [AdminController::class, 'login'])->name('login');// have or not, no problem

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');