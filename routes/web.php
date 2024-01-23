<?php

use App\Models\Animal;
use App\Models\Listing;
use Animal as GlobalAnimal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class, 'index']);

Route::get('/animals/create', [AnimalController::class, 'create']);

Route::post('/animals', [AnimalController::class, 'store']);

Route::delete('/animals/{animal}', [AnimalController::class, 'destroy']);

Route::get('/animals/{animal}', [AnimalController::class, 'show']);

Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);
