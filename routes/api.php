<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Grad;
use App\Models\User;
use App\Models\Grad\Rezervacija;
//mora se navesti koji controller poziva route
use App\Http\Controllers\RezApiController;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GradoviController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/rezervacije', [RezApiController::class, 'index']);
Route::get('/rezervacije/{id}', [RezApiController::class, 'show']);
Route::resource('rez', RezApiController::class);
Route::get('rez/search/{destinacija}', [RezApiController::class, 'search']);
Route::post('/rez', [RezApiController::class, 'store']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
