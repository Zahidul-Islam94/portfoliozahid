<?php

use App\Http\Controllers\LoopController;
use App\Http\Controllers\MySkillController;
use App\Http\Controllers\SiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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




// Route::get('/home', function(){
//     return "Hello World";
// });




Route::get('/', [SiteController::class, 'home']);
Route::get('/skills', [SiteController::class, 'skills']);
Route::get('/my_team', [SiteController::class, 'my_team']);
Route::get('/what_we_do', [SiteController::class, 'what_we_do']);
Route::get('/portfolio', [SiteController::class, 'portfolio']);
Route::get('/testimonial', [SiteController::class, 'testimonial']);
Route::get('/get_in_touch', [SiteController::class, 'get_in_touch']);
Route::get('/create-student', [SiteController::class, 'createStudent']);

Route::get('/loop',[LoopController::class,'loopLearn']);
Route::post('/create-skill',[MySkillController::class,'skillCreate']);
Route::get('/manage-skill',[MySkillController::class,'skillManage']);
Route::get('/update-skill',[MySkillController::class,'skillUpdate']);
Route::get('/delete-skill',[MySkillController::class,'skillDelete']);
Route::get('/manage-agent',[MySkillController::class,'agentSelect']);


Route::delete('deletes/{id}',[MySkillController::class,'skDelete']);

Route::get('/name',function(){
    return "Postman";
});



