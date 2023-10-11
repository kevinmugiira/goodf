<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Route
     */
    Route::get('/logout', [\App\Http\Controllers\LogoutController::class,'logout'])->name('logout');
});

Route::get('master', [\App\Http\Controllers\MasterController::class,'index']);
Route::get('home', [\App\Http\Controllers\HomeController::class,'index']);

Route::get('facility', [\App\Http\Controllers\Health\FacilityController::class, 'index']);
Route::get('appointment', [\App\Http\Controllers\Health\AppointmentController::class, 'index']);
Route::get('treatment', [\App\Http\Controllers\Health\TreatmentController::class,'index']);
Route::get('rate', [\App\Http\Controllers\Health\RatingController::class, 'index']);
Route::get('info', [\App\Http\Controllers\Health\HealtInfoController::class, 'index']);
Route::get('doc1', [\App\Http\Controllers\Health\HealtInfoController::class, 'doc1']);
Route::get('categories/index', [\App\Http\Controllers\Health\CategoriesController::class,'index']);
