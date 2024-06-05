<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\kantor_polisiController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/', [LandingPageController::class,'index'])->name("landing-page");

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

Route::resource('kantor_polisi', 'kantor_polisiController');

Route::get('kantor_polisi/{kantor_polisi}/edit', 'kantor_polisiController@edit')->name('kantor_polisi.edit');
Route::delete('kantor_polisi/{kantor_polisi}', 'kantor_polisiController@destroy')->name('kantor_polisi.destroy');

// ... (existing routes) ...

Route::resource('kantor_polisi', kantor_polisiController::class)->middleware('auth');

// ...

Route::get('/police-station/{id}', [LandingPageController::class, 'show'])->name("police-station.show");
