<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealsController;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function () {

    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('auth.login');
});



//=========================== Auth =================================
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

//========================== Dashboard =============================
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//============================= CMS ================================
Route::prefix('cms')->group(function(){
    Route::get('/', [CmsController::class, 'index'])->name('cms');
    Route::get('addData',[CmsController::class, 'create'])->name('addData');
    Route::post('store', [CmsController::class, 'store'])->name('cms.store');
    Route::get('edit/{id}', [CmsController::class, 'edit'])->name('cms.edit');
    Route::post('update/{id}', [CmsController::class, 'update'])->name('cms.update');
    Route::post('delete/{id}', [CmsController::class, 'destroy'])->name('cms.destroy');
});

//=========================== Events ===============================
Route::prefix('events')->group(function(){
    Route::get('/',[EventsController::class, 'index'])->name('events');
    Route::get('addEvents', [EventsController::class, 'create'])->name('addEvents');
    Route::post('storeEvents', [EventsController::class, 'store'])->name('events.storeEvents');
    Route::get('edit/{id}', [EventsController::class, 'edit'])->name('events.edit');
    Route::post('update/{id}', [EventsController::class, 'update'])->name('events.update');
    Route::post('delete/{id}', [EventsController::class, 'destroy'])->name('events.destroy');
});


Route::prefix('performance')->group(function () {
    Route::get('/', [PerformanceController::class, 'index'])->name('performance');
    Route::get('addPerformance', [PerformanceController::class, 'create'])->name('addPerformance');
    Route::post('store', [PerformanceController::class, 'store'])->name('performance.store');
    Route::get('edit/{id}', [PerformanceController::class, 'edit'])->name('performance.edit');
    Route::post('update/{id}', [PerformanceController::class, 'update'])->name('performance.update');
    Route::post('delete/{id}', [PerformanceController::class, 'destroy'])->name('performance.destroy');
});

Route::prefix('contacts')->group(function(){
    Route::get('/', [ContactController::class, 'index'])->name('contacts');
    Route::post('importContact', [ContactController::class, 'importContactXls'])->name('contacts.import');
});

Route::prefix('deals')->group(function(){
    Route::get('/', [DealsController::class, 'index'])->name('deals');
    Route::post('importDeals', [DealsController::class, 'importDealsXls'])->name('deals.import');
});

Route::prefix('companies')->group(function(){
    Route::get('/', [CompaniesController::class, 'index'])->name('companies');
    Route::post('importCompanies', [CompaniesController::class, 'importCompaniesXls'])->name('companies.import');
});





