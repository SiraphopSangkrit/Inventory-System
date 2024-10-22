<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GoodsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/goods', [GoodsController::class, 'index'])->name('goods.index');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


