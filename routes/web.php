<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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


Route::get('/home', [MainController::class, 'showHome']);
Route::get('/friend', [MainController::class, 'showFriend']);
Route::get('/teaching-schedule', [MainController::class, 'showteachingschedule']);
Route::get('/about-me', [MainController::class, 'showaboutme']);
