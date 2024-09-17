<?php

use App\Http\Controllers\FromController;
use App\Http\Controllers\FromInfoController;
use App\Http\Controllers\HesabController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\Logincontrroler;

use App\Http\Middleware;
use App\Http\Middleware\User11;
use Illuminate\Support\Facades\Auth;

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
    return view('index2');
});
Route::get('/ttt', function () {
    return view('index2');
});

Route::get('/blog',[ViewController::class,'index'])->name('blog');



Route::get('/start',[HesabController::class,'index'])->name('income')->middleware('user');
Route::post('/store',[HesabController::class,'store'])->name('store')->middleware('user');

Route::get('/from',[FromController::class,'index'])->name('from')->middleware('user');
Route::get('/from/info',[FromInfoController::class,'index'])->name('frominfo')->middleware('user');
Route::post('/from/store',[FromController::class,'store'])->Name('fromstore')->middleware('user');


Route::get('/salary',[HoghoghController::class,'index'])->name('salary')->middleware('user');
Route::post('/salary/store',[HoghoghController::class,'store'])->Name('salarystore')->middleware('user');
Route::get('/salary/delete/{id}',[HoghoghController::class,'delete'])->Name('salarydelet')->middleware('user');
Route::get('/salary/update/{id}',[HoghoghController::class,'update'])->Name('salaryupdate')->middleware('user');




Route::get('/cost',[CostController::class,'index'])->name('cost')->middleware('user');
Route::post('/cost/store',[CostController::class,'coststore'])->Name('coststore')->middleware('user');
Route::get('/cost/delete/{id}',[CostController::class,'delete'])->Name('costdelet')->middleware('user');
Route::get('/cost/update/{id}',[CostController::class,'update'])->Name('costupdate')->middleware('user');



Route::get('/login',[Logincontrroler::class,'index'])->name('login');
Route::post('/regeditstor',[Logincontrroler::class,'store'])->name('userregedit')->middleware('user');
Route::get('/regedit',[Logincontrroler::class,'regeditshow'])
->name('regedit')->middleware('user');
Route::get('/logout',[Logincontrroler::class,'logout'])->name('logout');

Route::post('/checkuser',[Logincontrroler::class,'checkuser'])->name('checkuser');




Route::get('/hellp',[Logincontrroler::class,'hellp'])->name('hellp');



