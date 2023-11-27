<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
    return view('index');
});

Route::get('/tabel', function () {
    return view('tabel');
});

Route::get('/create',[BarangController::class,'create'])->name('create');
Route::post('/store', [BarangController::class, 'store'])->name('store');
Route::get('/show', [BarangController::class, 'index'])->name('show');
Route::get('/delete/{id}', [BarangController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [BarangController::class, 'update'])->name('update');
