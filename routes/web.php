<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\PortController;
use App\Http\Controllers\PreviewController;
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
Route::get('/print/crew/{id}', [PreviewController::class, 'show']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {

    Route::resource('/admin/crew', CrewController::class);
    Route::resource('/admin/company', CompanyController::class);
    Route::resource('/admin/currency', CurrencyController::class);
    Route::resource('/admin/national', NationalController::class);
    Route::resource('/admin/port', PortController::class);
    Route::resource('/admin/ship', ShipController::class);
    Route::resource('/admin/job', JobController::class);
    Route::resource('/admin/exp', ExperienceController::class);
    Route::resource('/admin/doc', DocumentController::class);
    Route::resource('/admin/contact', ContactController::class);
    Route::resource('/admin/contract', ContractController::class);
    Route::resource('/admin/certificate', CertificateController::class);
    Route::resource('/admin/medical', MedicalController::class);




    // Route::get('/profile/{id}', [App\Http\Controllers\CrewController::class, 'show'])->name('profile.show');
    // Route::post('/profile/create', [App\Http\Controllers\CrewController::class, 'store'])->name('profile.store');
    // Route::post('/profile/update', [App\Http\Controllers\CrewController::class, 'update'])->name('profile.update');
    // Route::resource('/profile', CrewController::class);
});
