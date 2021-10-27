<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\Auth\LogoutController;

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

Route::view('/login', 'livewire/auth/login')->name('login');
Route::view('/register', 'livewire/auth/register')->name('register');
Route::post('/logMeIn', [PatientController::class, 'login'])->name('logMeIn');

Route::view('/', 'welcome')->name('home');
Route::get('patients/index', [PatientController::class, 'index'])->name('patients.index');
Route::get('patients/export', [PatientController::class, 'export'])->name('patients.export');
Route::view('patients/record', 'patients/pressureForm')->name('patients.record');
Route::post('postRecord', [RecordController::class, 'create'])->name('records.create');

// Route::middleware('auth')->group(function () {
//     Route::view('/', 'welcome')->name('home');
//     Route::get('/patients/index', [PatientController::class, 'index'])->name('patients.index');
//     Route::get('patients/export', 'PatientController@export');
// });
