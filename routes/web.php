<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsersController;
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
}) ->name('home');


//Route NavBar 

Route::get('/', 'HomeController@index')->name('home');
Route::get('/characters', 'CharacterController@index')->name('characters.index');
Route::get('/groups', 'GroupController@index')->name('groups.index');
Route::get('/catalog', 'CharacterController@catalog')->name('characters.catalog');
Route::get('/teams', 'TeamController@index')->name('teams.index');
Route::post('/logout', 'AuthController@logout')->name('logout');



//Routes Users
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/users', [UsersController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UsersController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

//Routes Connection
Route::get('/login/connection', [LoginController::class, 'showloginForm'])->name('login.index');
Route::post('/login/connection', [LoginController::class, 'login'])->name('login.auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Characters routes
Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');
Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');
Route::get('/characters/{character}', [CharacterController::class, 'show'])->name('characters.show');
Route::get('/characters/{character}/edit', [CharacterController::class, 'edit'])->name('characters.edit');
Route::put('/characters/{character}', [CharacterController::class, 'update'])->name('characters.update');
Route::delete('/characters/{character}', [CharacterController::class, 'destroy'])->name('characters.destroy');

// Groups routes
Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
Route::get('/groups/create', [GroupController::class, 'create'])->name('groups.create');
Route::post('/groups', [GroupController::class, 'store'])->name('groups.store');
Route::get('/groups/{group}', [GroupController::class, 'show'])->name('groups.show');
Route::get('/groups/{group}/edit', [GroupController::class, 'edit'])->name('groups.edit');
Route::put('/groups/{group}', [GroupController::class, 'update'])->name('groups.update');
Route::delete('/groups/{group}', [GroupController::class, 'destroy'])->name('groups.destroy');

// Group-Character routes
Route::get('/groups/{group}/add-character', [GroupController::class, 'addCharacter'])->name('groups.addCharacter');
Route::post('/groups/{group}/add-character', [GroupController::class, 'storeCharacter'])->name('groups.storeCharacter');
Route::delete('/groups/{group}/remove-character/{character}', [GroupController::class, 'removeCharacter'])->name('groups.removeCharacter');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Routes pour le catalogue de personnages
Route::get('/characters/catalog', [CharacterController::class, 'catalog'])->name('characters.catalog');

// Route pour l'invitation de personnage
Route::post('/characters/{character}/invite', [CharacterController::class, 'invite'])->name('characters.invite');

// Route pour l'acceptation ou le refus d'invitation
Route::post('/teams/{team}/characters/{character}/accept', [TeamController::class, 'accept'])->name('teams.characters.accept');
Route::post('/teams/{team}/characters/{character}/reject', [TeamController::class, 'reject'])->name('teams.characters.reject');