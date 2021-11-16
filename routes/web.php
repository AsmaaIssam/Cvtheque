<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ModuleCvController;

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

Route::get('/test', function () {
    return view('test');
});
Route::redirect('/', '/dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/test', function () {
    return view('test');
})->name('test'); 


//Admin routes

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('/users', UserControler::class);
        Route::resource('/roles', RoleController::class);
    });

    Route::name('modules.')->group(function () {
        Route::resource('/projets', ProjetController::class);
    });
        
   
    Route::prefix('modules')->name('modules.')->group(function () {
        Route::resource('/cvs', ModuleCvController ::class);
     });
        
});




