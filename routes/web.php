<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QLeverancierController;
use App\Http\Controllers\QProductController;
use App\Http\Controllers\KlantenController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/leveranciers/show', [QLeverancierController::class, 'show'])->name('leveranciers.show');
Route::get('/leveranciers/details/{id}', [QLeverancierController::class, 'details'])->name('leveranciers.details');
Route::get('/leveranciers/edit/{id}', [QLeverancierController::class, 'edit'])->name('product.edit');
// Route::put('/leveranciers/update/{id}', [QLeverancierController::class, 'update'])->name('product.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// route maken voor de homepagina
Route::get('/klanten', [KlantenController::class, 'index'])->name('klanten.index');
Route::get('/klanten/klantenDetails/{id}', [KlantenController::class, 'show'])->name('klanten.klantenDetails');
// Route::get('/klanten/klantenDetails/{id}', [KlantenController::class, 'show'])->name('klanten.show');
Route::get('/klanten/klantenDetails/{id}', 'KlantenController@klantenDetails')->name('klanten.klantenDetails');
// Route::get('/klanten/klantenDetails/{id}', 'KlantenController@klantenDetails')->name('klanten.show');


require __DIR__ . '/auth.php';
