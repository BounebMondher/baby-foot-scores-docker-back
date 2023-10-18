<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('get-players', [Controller::class, 'getPlayers']);
Route::post('add-player', [Controller::class, 'addPlayer']);
Route::delete('delete-player/{id}', [Controller::class, 'deletePlayer']);

Route::get('get-games', [Controller::class, 'getGames']);
Route::post('add-game', [Controller::class, 'addGame']);
Route::delete('delete-game/{id}', [Controller::class, 'deleteGame']);


