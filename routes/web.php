<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AjouterController;
use App\Http\Controllers\AuthController;
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
    Route::get('liste', [HomeController::class, 'liste'])->name('liste');
});

    // Route::post('/ajouter_get', [AjouterController::class, 'ajouter_get'])->name('ajouter_get');
    Route::post('/publish_post', [AjouterController::class, 'publish_post'])->name('publish_post');

    Route::get('questions/edit{question}', [AjouterController::class, 'edit'])->name('edit');
    Route::put('questions/{question}', [AjouterController::class, 'update'])->name('update');

    Route::post('login', [AuthController::class, 'loginpost'])->name('login');
    Route::get('login', [AuthController::class, 'login'])->name('login');

    Route::post('signup', [AuthController::class, 'register'])->name('signup');
    Route::get('signup', [AuthController::class, 'signup'])->name('signup');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('publish', [HomeController::class, 'publish_question'])->name('publish');
    Route::get('categorie', [HomeController::class, 'categorie'])->name('categorie');

    Route::post('categorie_post', [HomeController::class, 'categorie_post'])->name('categorie_post');

    Route::get('sous_categorie', [HomeController::class, 'sous_categorie'])->name('sous_categorie');
    Route::post('souscategorie', [HomeController::class, 'sous_categoriepost'])->name('souscategorie_post');

    Route::get('reponse', [HomeController::class, 'reponse'])->name('reponse');
    Route::get('liste_categorie', [HomeController::class, 'liste_categorie'])->name('liste_categorie');