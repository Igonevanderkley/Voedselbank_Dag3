<?php

use App\Http\Controllers\GezinController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergieController;

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

// Route::get('/gezinnen', function () {
//     return view('gezinnen');
// })->middleware(['auth', 'verified'])->name('gezinnen');


Route::get('/gezinnen', [GezinController::class, 'read'])->name('gezinnen');
Route::get('/allergie_details/{gezinId}', [AllergieController::class, 'read'])->name('allergie_details');
Route::get('/wijzig_allergie/{allergieId}/{persoonId}', [AllergieController::class, 'update'])->name('wijzig_allergie');
Route::post('/wijzig_allergie/edit', [AllergieController::class, 'edit'])->name('edit');
Route::post('/gezinnen/filter', [GezinController::class, 'filter'])->name('filter');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
