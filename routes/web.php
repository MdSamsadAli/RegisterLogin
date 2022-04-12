<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('dashboard', function () {
    return view('Admin/dashboard');
});


// Route::get('/', function(){
//     return view('Auth.login');
// });

// Route::get('register', function(){
//     return view('Auth.register');
// })->name('register');


Route::get('register', [RegisterController::class, 'registerForm'])->name('register');
Route::post('register', [RegisterController::class, 'registerUser'])->name('register-user');


Route::get('/', [RegisterController::class, 'loginForm'])->name('login-form');
Route::post('/', [LoginController::class, 'loginUser'])->name('login-user');