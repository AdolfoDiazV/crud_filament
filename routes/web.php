<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('products', ProductController::class);
Route::get('products/{slug}/edit', 'ProductController@edit')->name('product.edit');

