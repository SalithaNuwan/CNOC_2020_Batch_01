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


// task
Route::get('newTask', [App\Http\Controllers\TaskController::class, 'newTask'])->name('newTask');
Route::get('taskList', [App\Http\Controllers\TaskController::class, 'taskList'])->name('taskList');

// user

Route::get('newUser', [App\Http\Controllers\UsersController::class, 'newUser'])->name('newUser');
Route::get('users', [App\Http\Controllers\UsersController::class, 'users'])->name('users');
Route::get('resetPassword', [App\Http\Controllers\UsersController::class, 'resetPassword'])->name('resetPassword');
Route::get('profile', [App\Http\Controllers\UsersController::class, 'profile'])->name('profile');
Route::get('resetPasswordUser', [App\Http\Controllers\UsersController::class, 'resetPasswordUser'])->name('resetPasswordUser');