<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DelightcelaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/delightCelao',[DelightcelaoController::class, 'index'])->name('delightcelao.index');
Route::get('/delightCelao/booking',[DelightcelaoController::class, 'booking'])->name('delightcelao.booking');
Route::get('/delightCelao/menus',[DelightcelaoController::class, 'menus'])->name('delightcelao.menus');
Route::get('/delightCelao/review',[DelightcelaoController::class, 'review'])->name('delightcelao.review');
Route::get('/delightCelao/admin',[DelightcelaoController::class, 'admin'])->name('delightcelao.admin');
Route::post('/delightCelao',[DelightcelaoController::class, 'store'])->name('delightcelao.store');
Route::post('/delightCelao',[DelightcelaoController::class, 'rstore'])->name('delightcelao.store');