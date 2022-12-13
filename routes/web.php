<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;





Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::middleware('role:admin')->group(function(){
    Route::get('/', function () { return view('layouts.layout'); });
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard-view');
});
