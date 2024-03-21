<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//importazione controller API Project
use App\Http\Controllers\Api\ProjectController as ApiProjectController;
//importazione controller API Contact
use App\Http\Controllers\Api\ContactController as ApiContactController;

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
    //mia api per restituire json ---- only permette di recuperare solo le rotte apparteneti a RESOURCE espresse nel seguente array 
    Route::resource('projects', ApiProjectController::class)->only([
        'index',
        'show'
    ]);
 
    //rotta che mi gestisce la ricezione dei dati da parte di contact in fronend
    Route::post('/contacts',[ApiContactController::class,'store'])->name('contacts.store');
});
