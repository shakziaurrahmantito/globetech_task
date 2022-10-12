<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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



Route::get('/',[userController::class,"oneToOneRelation"]);
Route::get('/oneToManyRelation',[userController::class,"oneToManyRelation"]);
Route::get('/manyToManyRelation',[userController::class,"manyToManyRelation"]);
