<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {return view('index');})->name('index')->middleware('auth');

Route::get('/login',[UserController::class , 'index'])->name('indexlogin');
Route::post('/login',[UserController::class , 'login'])->name('login');
Route::get('/logout',[UserController::class , 'logout'])->name('logout');

Route::get('/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::get('/etudiants/create', [EtudiantController::class, 'create'])->name('etudiants.create');
Route::post('/etudiants', [EtudiantController::class, 'store'])->name('etudiants.store');
Route::get('/etudiants/{etudiant}', [EtudiantController::class, 'show'])->name('etudiants.show')->middleware('auth');;
Route::get('/etudiants/{etudiant}/edit', [EtudiantController::class, 'edit'])->name('etudiants.edit')->middleware('auth');;
Route::put('/etudiants/{etudiant}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::get('/etudiants/{etudiant}/delete', [EtudiantController::class, 'destroy'])->name('etudiants.destroy');

Route::get('/filiere', [FiliereController::class, 'index'])->name('filiere.index')->middleware('auth');;
Route::get('/filiere/create', [FiliereController::class, 'create'])->name('filiere.create');
Route::post('/filiere', [FiliereController::class, 'store'])->name('filiere.store');
Route::get('/filiere/{filiere}', [FiliereController::class, 'show'])->name('filiere.show')->middleware('auth');;
Route::get('/filiere/{filiere}/edit', [FiliereController::class, 'edit'])->name('filiere.edit')->middleware('auth');;
Route::put('/filiere/{filiere}', [FiliereController::class, 'update'])->name('filiere.update');
Route::get('/filiere/{filiere}/delete', [FiliereController::class, 'destroy'])->name('filiere.destroy');
