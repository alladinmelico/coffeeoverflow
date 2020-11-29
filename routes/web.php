<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SchoolworksController;
use App\Http\Controllers\StudentSchoolworksController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/enroll', [CourseController::class, 'enroll'])->name('enroll');
Route::resource('course', CourseController::class)->middleware('auth');
Route::resource('schoolwork', SchoolworksController::class)->middleware('auth');
Route::resource('submission', StudentSchoolworksController::class)->middleware('auth');

Route::get('/smstest', function() {
    App\Models\User::first()->notify(new App\Notifications\NewSchoolwork());
});