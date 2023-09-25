<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('students',StudentController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/abdi', function (){
    return '<h1>zxcvzxcvzxcvzxcvzx</h1>';
});
Route::get('/docs/10.x/structure', function (){
    // return '<h1>Directory Structure</h1>';
    return view('home');
});
