<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// This is for checking API route --- http://127.0.0.1:8000/api/students 
// Route::get('students', function(){
//    return 'This is Student API';
// });

Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/{id}',[StudentController::class, 'show']);
Route::get('students/{id}/edit',[StudentController::class, 'edit']);
Route::put('students/{id}/edit',[StudentController::class, 'update']);
Route::delete('students/{id}/delete',[StudentController::class, 'destroy']);



// LINK -- https://www.youtube.com/watch?v=57Ej3X6tzfw&t=12s

