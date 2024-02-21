<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['as' => 'profile.', 'prefix' => 'profile'], function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/', 'edit')->name('edit');
            Route::patch('/', 'update')->name('update');
            Route::delete('/', 'destroy')->name('destroy');
        });
    });

    Route::group(['as' => 'menu.', 'prefix' => 'menu'], function () {
        Route::controller(MenuController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('add', 'add')->name('add');
            Route::post('store', 'store')->name('store');
        });
    });
});

require __DIR__.'/auth.php';
