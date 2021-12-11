<?php

use App\Http\Controllers\ShowController;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', function(){
//     return "Hello World";
// });

Route::get('/home', [ShowController::class, 'home']);
Route::get('/skills', [ShowController::class, 'skills']);
Route::get('/my_team', [ShowController::class, 'my_team']);
Route::get('/what_we_do', [ShowController::class, 'what_we_do']);
Route::get('/portfolio', [ShowController::class, 'portfolio']);
Route::get('/testimonial', [ShowController::class, 'testimonial']);