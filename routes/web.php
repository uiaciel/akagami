<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {

    Route::resource('/admin/crew', CrewController::class);
    Route::resource('/admin/company', CompanyController::class);
    Route::resource('/admin/currency', CurrencyController::class);
    Route::resource('/admin/national', NationalController::class);
    Route::resource('/admin/port', PortController::class);
    Route::resource('/admin/ship', ShipController::class);
    Route::resource('/admin/job', JobController::class);

    // Route::get('/profile/{id}', [App\Http\Controllers\CrewController::class, 'show'])->name('profile.show');
    // Route::post('/profile/create', [App\Http\Controllers\CrewController::class, 'store'])->name('profile.store');
    // Route::post('/profile/update', [App\Http\Controllers\CrewController::class, 'update'])->name('profile.update');
    // Route::resource('/profile', CrewController::class);
});
