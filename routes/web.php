<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');


Route::get('index', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::post('store', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('expenses/{id}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
Route::put('expenses/{id}', [ExpenseController::class, 'update'])->name('expenses.update');
Route::delete('expenses/{id}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');

// Route::get('events/create', [EventController::class, 'create'])->name('events.create');
//     Route::post('events', [EventController::class, 'store'])->name('events.store');
//     Route::get('events/{id}', [EventController::class, 'show'])->name('events.show');
//     Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
//     Route::put('events/{id}', [EventController::class, 'update'])->name('events.update');
//     Route::delete('events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/', function () {
    return view('welcome');
});


    // Route::get('create', [BookingController::class, 'create'])->name('create');
    // Route::post('store', [BookingController::class, 'store'])->name('store');
    // Route::get('{id}', [BookingController::class, 'show'])->name('show');