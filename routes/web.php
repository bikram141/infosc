<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhysicianController;
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
    return view('welcome');
});

Route::get('show_form',[PhysicianController::class,'index'])->name('showForm');
Route::get('list',[PhysicianController::class,'list'])->name('list');
Route::post('import',[PhysicianController::class,'import'])->name('import');
Route::get('export',[PhysicianController::class,'export'])->name('export');