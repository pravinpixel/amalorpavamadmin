<?php

use App\Http\Controllers\masterController;
use Illuminate\Support\Facades\Route;


// Route::middleware('CORS')->prefix('master')->group(function(){
    Route::prefix('master')->middleware('CORS')->group(function(){
        Route::get('/',[masterController::class,'index'])->name('master.index');
        Route::post('/update',[masterController::class,'update'])->name('master.update');
        Route::post('/stateChange',[masterController::class,'stateChange'])->name('master.stateChange');
        Route::post('/delete',[masterController::class,'delete'])->name('master.delete');
        Route::post('/create',[masterController::class,'create'])->name('master.create');
        Route::get('/users',[masterController::class,'users'])->name('master.users');
        Route::get('/roles',[masterController::class,'roles'])->name('master.roles');
});