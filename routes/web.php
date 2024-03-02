<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/admins', function () {
	return view('admin.desboard');
});

