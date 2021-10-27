<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

Route::get('patients/index', [PatientController::class, 'index'])->name('patients.index');
Route::get('patients/export', [PatientController::class, 'export'])->name('patients.export');
Route::get('patients/create', [PatientController::class, 'create'])->name('patients.create');
Route::view('/', 'welcome')->name('home');
// For once authentication is implemented

// Route::middleware('auth')->group(function () {
//     Route::get('/patients/index', [PatientController::class, 'index'])->name('patients.index');
//     Route::get('patients/export', 'PatientController@export');
// });
