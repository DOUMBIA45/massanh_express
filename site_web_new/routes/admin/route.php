<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/dashboard',[AdminController::class,'index'])->name("admin.dashboard");

    ///////////////////////// ROUTE SERVICES //////////////
    Route::get('admin/services',[ServiceController::class,'index'])->name('admin.services');
    Route::post('admin/store_service',[ServiceController::class,'store_service'])->name('admin.store_service');
});

