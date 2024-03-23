<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students-all',[DemoController::class,'index']);
Route::delete('/students-delete/{id}',[DemoController::class,'delete']);
Route::post('/students-create',[DemoController::class,'store']);
Route::put('/students-update/{id}',[DemoController::class,'studentsupdate']);