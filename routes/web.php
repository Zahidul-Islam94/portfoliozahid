<?php

use App\Http\Controllers\SiteController;
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




Route::get('/home', [SiteController::class, 'home']);
Route::get('/skills', [SiteController::class, 'skills']);
Route::get('/my_team', [SiteController::class, 'my_team']);
Route::get('/what_we_do', [SiteController::class, 'what_we_do']);
Route::get('/portfolio', [SiteController::class, 'portfolio']);
Route::get('/testimonial', [SiteController::class, 'testimonial']);