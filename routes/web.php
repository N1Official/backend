<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CipoHirdetesController;

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

Route::get('/', [CipoHirdetesController::class, "index"])->name("home");
Route::get('/cipohirdetesek/{azon}', [CipoHirdetesController::class, "show"])
    ->whereNumber("id")
    ->name("cipohirdetesek.show");
Route::get('/cipohirdetesek/create', [CipoHirdetesController::class, "create"])
    ->name("cipohirdetesek.create");
Route::post('/cipohirdetesek', [CipoHirdetesController::class, "store"])
    ->name("cipohirdetesek.store");
