<?php

use App\Http\Controllers\NiveauController;
use App\Http\Controllers\YearSchoolController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('niveaux')->group(function () {
        Route::get('/', [NiveauController::class, 'index'])->name('niveaux');
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', [YearSchoolController::class, 'index'])->name('settings');
        Route::get('/create-school-year', [YearSchoolController::class, 'create'])->name('settings.create_school_year');
    });
});
