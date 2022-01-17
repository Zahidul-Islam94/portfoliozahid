<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
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


// home
Route::get("/manage-home",[HomeController::class,'manageHome']);
Route::post("/update-home",[HomeController::class,'updateHome']);
Route::post("/create-home",[HomeController::class,'createHome']);
Route::delete("/delete-home",[HomeController::class,'deleteHome']);

// resume
Route::get("/manage-resume",[ResumeController::class,'manageResume']);
Route::post("/update-resume",[ResumeController::class,'updateResume']);
Route::post("/create-resume",[ResumeController::class,'createResume']);
Route::delete("/delete-resume",[ResumeController::class,'deleteResume']);