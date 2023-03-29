<?php

use App\Http\Controllers\Api\InvoicesController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\SectionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('invoices',[InvoicesController::class,'index']);
Route::get('invoice/{id}',[InvoicesController::class,'show']);


Route::get('sections',[SectionsController::class,'index']);
Route::get('section/{id}',[SectionsController::class,'show']);


Route::get('products',[ProductsController::class,'index']);
Route::get('product/{id}',[ProductsController::class,'show']);



