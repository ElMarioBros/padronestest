<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntriesController;
use App\Http\Controllers\CarerController;

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

//Padrones|inicio
Route::get('padrones/success', function () {
    return view('success');
})->name('success');

//Sindicato|union
Route::get('/padrones/union', function () {
    return view('padron.union.form');
})->name('index');

Route::post('/padrones/union', [EntriesController::class,'store'])->name('store-union');


//Cuidadores|carers
Route::get('padrones/carers', function() {
    return view('padron.carers.form');  
});
Route::post('/padrones/carers', [CarerController::class,'store'])->name('store-carer');
