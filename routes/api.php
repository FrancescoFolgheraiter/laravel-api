<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//importazione controller API Project
use App\Http\Controllers\Api\ProjectController as ApiProjectController;

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

Route::name('api.')->group(function() {
    
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });
    //mia api per restituire json
    Route::resource('projects', ApiProjectController::class)->only([
        'index',
        'show'
    ]);
});
