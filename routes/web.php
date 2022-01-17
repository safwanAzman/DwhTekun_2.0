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
use App\Http\Middleware\AuthenticatedUser;
use App\Http\Controllers\AuthenticationUser;
use Illuminate\Support\Facades\Redirect;


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

//oracle production login
Route::get('/logmasuk', [AuthenticationUser::class, 'logmasuk'])->name('logmasuk');
Route::post('/loggingin', [AuthenticationUser::class, 'loggingin'])->name('loggingin');
Route::post('/systemlogin?userid={userid}&password={password}', [AuthenticationUser::class, 'systemLogin']);
Route::get('/logkeluar', [AuthenticationUser::class, 'logkeluar'])->name('logkeluar');
Route::get('/emandate-auth', 'Bypasslogin@loggingin2');

Route::get('/loginterus/{userId}/{password}',function($userId,$password){

$a = session(['key' => 'value']);

dd(session()->get('key'));
});

Route::middleware([AuthenticatedUser::class])->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('laksana', [LaksanaController::class, 'index'])->name('laksana');

    // performance
    Route::get('performance/prestasi-keseluruhan', [PrestasiKeseluruhanController::class, 'index'])->name('performance-prestasi-keseluruhan');

    //usahawan
    Route::get('usashawan/usahawan_berjaya_500', [UsahawanController::class, 'usahawan500'])->name('usahawan500');

});