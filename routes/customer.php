<?php

use App\Http\Controllers\staffController;
use Illuminate\Support\Facades\Route;

Route::middleware('role:admin')->prefix('staff')->group(function(){
    Route::prefix('create')->group(function(){
        Route::get('/',[staffController::class,'personalInfo'])->name('staff.create');
        Route::get('/basic-info',[staffController::class,'basicWiz'])->name('staff.create.basic-info');
        Route::get('/emp-position',[staffController::class,'empWiz'])->name('staff.create.emp-position');
        Route::get('/education-quali',[staffController::class,'eduWiz'])->name('staff.create.education-quali');
        Route::get('/family-info',[staffController::class,'faminfoWiz'])->name('staff.create.family-info');
        Route::get('/medical-info',[staffController::class,'medicalInfoWiz'])->name('staff.create.medical-info');
        Route::get('/appoinment-info',[staffController::class,'apponmentWiz'])->name('staff.create.appoinment-info');
    });
    Route::get('/',[staffController::class,'index'])->name('staff.customer-index');
});