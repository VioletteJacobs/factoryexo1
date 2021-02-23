<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeFormationController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [BatimentController::class, 'hello']);
Route::get('/batiment', [BatimentController::class, 'index']);
Route::get('/formation', [FormationController::class, 'index']);
Route::get('/typeformation', [TypeFormationController::class, 'index']);
