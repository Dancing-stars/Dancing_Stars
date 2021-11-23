<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\preEvaluationController;
use App\Http\Controllers\EvaluationController;
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
     return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/preEvaluation', [App\Http\Controllers\preEvaluationController::class, 'index'])->name('preEvaluation');
Route::get('/evaluation/{id}', [App\Http\Controllers\EvaluationController::class, 'index'])->name('evaluation');