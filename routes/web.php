<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth'])->group(function () {
    // Vos routes protégées ici
    Route::get('/', [HomeController::class, 'accueil'])->name('index');
    Route::get('ajouter', [App\Http\Controllers\AjouterController::class, 'ajouter'])->name('ajouter');
});

    Route::post('/ajouter_get', [App\Http\Controllers\AjouterController::class, 'ajouter_get'])->name('ajouter_get');
    Route::post('/publish_post', [App\Http\Controllers\HomeController::class, 'publish_post'])->name('publish_post');

    Route::post('login', [App\Http\Controllers\AuthController::class, 'loginpost'])->name('login');
    Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');

    Route::post('signup', [App\Http\Controllers\AuthController::class, 'register'])->name('signup');
    Route::get('signup', [App\Http\Controllers\AuthController::class, 'signup'])->name('signup');

    Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('publish', [HomeController::class, 'publish_question'])->name('publish');