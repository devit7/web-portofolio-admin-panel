<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\kdaController;
use App\Http\Controllers\ProglanguageController;

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
    return view('main');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

// Router Untuk User
Route::get('/user', [UserController::class, 'read'])->name('user.read');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store'); // Changed the URL to /user/store
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// Router Untuk About
Route::get('/about', [AboutController::class, 'read'])->name('about.read');
Route::get('/about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('/about/store', [AboutController::class, 'store'])->name('about.store'); // Changed the URL to /about/store
Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
Route::delete('/about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');


// Router Untuk KDA
Route::get('/kda', [kdaController::class, 'read'])->name('kda.read');
Route::get('/kda/create', [kdaController::class, 'create'])->name('kda.create');
Route::post('/kda/store', [kdaController::class, 'store'])->name('kda.store'); // Changed the URL to /kda/store
Route::get('/kda/{id}/edit', [kdaController::class, 'edit'])->name('kda.edit');
Route::put('/kda/{id}', [kdaController::class, 'update'])->name('kda.update');
Route::delete('/kda/{id}', [kdaController::class, 'destroy'])->name('kda.destroy');

// Router Untuk Proglanguage
Route::get('/proglanguage', [ProglanguageController::class, 'read'])->name('proglanguage.read');
Route::get('/proglanguage/create', [ProglanguageController::class, 'create'])->name('proglanguage.create');
Route::post('/proglanguage/store', [ProglanguageController::class, 'store'])->name('proglanguage.store'); // Changed the URL to /proglanguage/store
Route::get('/proglanguage/{id}/edit', [ProglanguageController::class, 'edit'])->name('proglanguage.edit');
Route::put('/proglanguage/{id}', [ProglanguageController::class, 'update'])->name('proglanguage.update');
Route::delete('/proglanguage/{id}', [ProglanguageController::class, 'destroy'])->name('proglanguage.destroy');


?>



