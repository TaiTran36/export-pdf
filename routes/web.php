<?php

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
    return view('welcome');
});

Route::get('/export-pdf', [\App\Http\Controllers\Controller::class, 'showScreen'])->name('showScreen');
Route::post('/event-export-pdf', [\App\Http\Controllers\Controller::class, 'exportPDF'])->name('exportPDF');
