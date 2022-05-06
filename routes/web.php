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
    return view('welcome');
});


// Route::get('/Laravel', function () {
//     return 'Hello Laravel';
// });

// Route::get('/home', function () {
//     return view('home');
// });


// Route::get('/home', [App\Http\Controllers\UsersController::class, 'returnHomePage'])->name('getHomePage');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');