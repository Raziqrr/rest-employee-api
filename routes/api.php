<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function(){
   return 'Hello World'; 
});

Route::get('/Goodbye/{name}', function($name){
    return 'Goodbye '.$name; 
 });
 
Route::post('/info', function(Request $request){
    return "Your name is ".$request["name"]." Your age is ".$request["age"]." age years old";
});

Route::post('/tasks', [TaskController::class,'store']);

Route::get('/tasks', [TaskController::class,'index']);

Route::get('/tasks/{id}',[TaskController::class,'show']);

Route::put('/tasks/{id}', [TaskController::class,'update']);

Route::delete('/tasks/{id}', [TaskController::class,'delete']);