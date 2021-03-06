<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\laksana\LaksanaController;
use App\Http\Controllers\performance\PrestasiKeseluruhanController;
use App\Http\Controllers\usahawan\UsahawanController;

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

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class) ->name('login');

    Route::get('register', Register::class)->name('register');

});

Route::get('password/reset', Email::class)->name('password.request');

Route::get('password/reset/{token}', Reset::class)->name('password.reset');


Route::middleware('auth')->group(function () {
    Route::get('home', [DashboardController::class, 'index'])->name('home');
    Route::get('email/verify', Verify::class)->middleware('throttle:6,1')->name('verification.notice');
    Route::get('password/confirm', Confirm::class)->name('password.confirm');
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)->middleware('signed')->name('verification.verify');
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('auth')->group(function () {
    
    Route::get('laksana', [LaksanaController::class, 'index'])->name('laksana');

    // performance
    Route::get('performance/prestasi-keseluruhan', [PrestasiKeseluruhanController::class, 'index'])->name('performance-prestasi-keseluruhan');

    //usahawan
    Route::get('usashawan/usahawan_berjaya_500', [UsahawanController::class, 'usahawan500'])->name('usahawan500');

});
