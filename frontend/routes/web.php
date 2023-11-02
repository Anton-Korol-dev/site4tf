<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BotsController;

Route::get('/', [PagesController::class, 'indexPage']);
Route::get('/alliances', [PagesController::class, 'alliancesPage']);
Route::get('/gamemodes', [PagesController::class, 'gamemodesPage']);
Route::prefix('combat-bots')->group(function () {
    Route::get('/', [BotsController::class, 'botsList']);
    Route::get('/{bot_id}', [BotsController::class, 'botEntry']);
});
