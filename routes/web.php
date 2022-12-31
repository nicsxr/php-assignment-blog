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

Route::domain('{subdomain}.localhost')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::delete('/', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
    Route::post('/', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
    Route::get('/{id}', [App\Http\Controllers\AdminController::class, 'show'])->name('admin.show');
    Route::delete('/comment', [App\Http\Controllers\AdminController::class, 'destroyCommebnt'])->name('admin.destroyComment');
});

Route::resource('main', 'App\Http\Controllers\PostController');
Route::resource('comment', 'App\Http\Controllers\CommentController');