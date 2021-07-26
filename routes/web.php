<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [StudentController::class, 'index']);
Route::get('/add_student', [StudentController::class, 'add_student']);
Route::post('/student/store', [StudentController::class, 'store']);
Route::get('/edit_student/{student_id}', [StudentController::class, 'edit_student']);
Route::post('/student/update/{student_id}', [StudentController::class, 'update']);
Route::get('/student/delete/{student_id}', [StudentController::class, 'delete']);
