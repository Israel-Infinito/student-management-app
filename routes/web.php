<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;



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

// Route::get('/', function () {
//     return view('welcome');
//     return 'Hello world';
// });

Route::get('/',[PagesController::class, 'index']);
Route::get('/profile',[StudentController::class, 'index']);
Route::get('/profile/create',[StudentController::class, 'create']);
Route::post('/profile/create', [StudentController::class, 'store'])->name('profile.store');
Route::resource('profile', StudentController::class);



