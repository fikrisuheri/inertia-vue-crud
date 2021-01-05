<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasyarakatController;
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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home',[HomeController::class,'index']);
    Route::get('/about',[HomeController::class,'about']);

    // MasyarakatController Route
    Route::get('/masyarakat',[MasyarakatController::class,'index']);
    Route::get('/masyarakat/create',[MasyarakatController::class,'create']);
    Route::post('/masyarakat/store',[MasyarakatController::class,'store']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
