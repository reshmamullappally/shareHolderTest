<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShareHolderController;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\SharesReportController;
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
Route::get('image', [App\Http\Controllers\ImageController::class,'index'])->name('index');
Route::post('store', [App\Http\Controllers\ImageController::class,'store'])->name('store');

Route::get('/file-import',[UserController::class,'importView'])->name('import-view');
Route::post('/import',[UserController::class,
        'import'])->name('import');
Route::get('/export',[UserController::class,
        'exportUsers'])->name('export');
        
Route::resource('shareholders', ShareHolderController::class);
Route::resource('shares', ShareController::class);
Route::get('shares-payment',[ShareController::class,'sharesPayment'])->name('shares-payment');
Route::get('loadShareAmountDetails',[ShareController::class,'loadShareAmountDetails'])->name('loadShareAmountDetails');
Route::get('shares_report',[SharesReportController::class,'shares_report'])->name('shares_report');
