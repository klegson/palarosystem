<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;   
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

// Route Group (Middleware avoid back to previous page after logout)
Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();

    // Route Group (Authentication)
    Route::middleware(['auth'])->group(function () {
        //Route Group (Controller)
        Route::controller(DashBoardController::class)->group(function () {
            Route::get('/dashboard','index')->name('dashboard');
            Route::get('/','index');
        });
    });
});