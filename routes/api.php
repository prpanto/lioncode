<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\TopicController;
use App\Http\Controllers\Api\LessonController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\InstructorController;
use App\Http\Controllers\Api\CompanyController;

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


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    
    Route::get('/companies', CompanyController::class);
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/events', EventController::class);
Route::get('/instructors', InstructorController::class);
Route::get('/lessons', LessonController::class);
Route::get('/topics', TopicController::class);
