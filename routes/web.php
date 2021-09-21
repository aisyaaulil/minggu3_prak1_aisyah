<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


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

Route::get('/welcome', [WelcomeController::class,'welcome']);

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', [WelcomeController::class, 'd3mi']);
    Route::get('/teknik-informatika', [WelcomeController::class, 'd4ti']);  
});

Route::get('/news/{kbrti}', [WelcomeController::class, 'newsti']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', [WelcomeController::class, 'kantor']);
    Route::get('/kelas', [WelcomeController::class, 'kelas']);
    Route::get('/laboratorium', [WelcomeController::class, 'lab']);
    Route::get('/lainnya', [WelcomeController::class, 'lain']);

});

Route::get('/aboutus', [WelcomeController::class,'aboutus']);

Route::get('/comment/{yourname}/{yourmessages}', [WelcomeController::class, 'comment']);
    
