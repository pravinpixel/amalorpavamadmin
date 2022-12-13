<?php

use App\Http\Controllers\masterController;
use Illuminate\Support\Facades\Route;


// Route::middleware('CORS')->prefix('master')->group(function(){
    Route::prefix('master')->group(function(){
    Route::get('/',[masterController::class,'index'])->name('master.index');
    Route::get('/users',[masterController::class,'users'])->name('master.users');
    Route::get('/roles',[masterController::class,'roles'])->name('master.roles');
});