<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

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




//Route NavBar 
Route::get('/',[HomeController::class,'index'])->name('accueil');
Route::get('/characters',[CharacterController::class, 'index'])->name('characters.index');
Route::get('/groups', 'GroupController@index')->name('groups.index');
Route::get('/catalog', 'CharacterController@catalog')->name('characters.catalog');
Route::get('/teams', 'TeamController@index')->name('teams.index');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');




//Routes Users
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users/create', [UsersController::class, 'store'])->name('users.store');



//Routes Connection
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/success', [AuthController::class, 'success'])->name('success');

//Routes characters
Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
Route::post('/characters/create', [CharacterController::class, 'store'])->name('characters.store');

