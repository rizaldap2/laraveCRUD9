<?php

use App\Http\Controllers\CostumerController;
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

Route::middleware(['auth'])->group(function(){
    Route::get('/costumer', [CostumerController::class,'list']);
    Route::get('/costumer/create', [CostumerController::class,'create']);
    Route::post('/costumer/store', [CostumerController::class,'store']);
    Route::get('/costumer/{id}/edit', [CostumerController::class,'edit']);
    Route::put('/costumer/{id}', [CostumerController::class,'update']);
    Route::delete('/costumer/{id}', [CostumerController::class,'destroy']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


