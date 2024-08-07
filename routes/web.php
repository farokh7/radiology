<?php

use App\Http\Controllers\FromController;
use App\Http\Controllers\FromInfoController;
use App\Http\Controllers\HesabController;
use App\Http\Controllers\CostController;

use App\Http\Controllers\HoghoghController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/start',[HesabController::class,'index'])->name('income');
Route::post('/store',[HesabController::class,'store'])->name('store');

Route::get('/from',[FromController::class,'index'])->name('from');
Route::get('/from/info',[FromInfoController::class,'index'])->name('frominfo');
Route::post('/from/store',[FromController::class,'store'])->Name('fromstore');


Route::get('/salary',[HoghoghController::class,'index'])->name('salary');
Route::post('/salary/store',[HoghoghController::class,'store'])->Name('salarystore');
Route::get('/salary/delete/{id}',[HoghoghController::class,'delete'])->Name('salarydelet');
Route::get('/salary/update/{id}',[HoghoghController::class,'update'])->Name('salaryupdate');




Route::get('/cost',[CostController::class,'index'])->name('cost');
Route::post('/cost/store',[CostController::class,'coststore'])->Name('coststore');
Route::get('/cost/delete/{id}',[CostController::class,'delete'])->Name('costdelet');
Route::get('/cost/update/{id}',[CostController::class,'update'])->Name('costupdate');


