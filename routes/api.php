<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\AnneeScolaireController;

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



Route::resource('niveaux', NiveauController::class);


Route::apiResource('eleves', EleveController::class);
Route::apiResource('disciplines', DisciplineController::class)->only([
    'index',
    'store'
]);

Route::apiResource('anneescolaire', AnneeScolaireController::class);
Route::apiResource('evaluations', EvaluationController::class);
Route::apiResource('classes/{id}/eleves', ClasseController::class);