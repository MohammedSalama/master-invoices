<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
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

/**
 * Authentication
 */
Route::get('/', function () {
    return view('auth.login');
});

/**
 *  Theme
 */
Route::get('/home', function () {
    return view('home');
}) ->middleware(['auth', 'verified'])->name('home');



require __DIR__.'/auth.php';

Route::resource('invoices',InvoicesController::class);

Route::resource('sections',SectionsController::class);

Route::resource('products',ProductsController::class);

Route::get('/{page}', [AdminController::class,'index']);
