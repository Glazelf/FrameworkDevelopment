<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('auth/login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('auth/login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('auth/register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('auth/register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('auth/signout');
Route::get('/', function () {
    return view('dashboard');
});