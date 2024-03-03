<?php

use App\Http\Controllers\Admin\AAcutaliteController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\ARealisationController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/dashboard',[AdminController::class,'index'])->name("admin.dashboard");

    ///////////////////////// ROUTE SERVICES //////////////
    Route::get('admin/services',[ServiceController::class,'index'])->name('admin.services');
    Route::post('admin/store_service',[ServiceController::class,'store_service'])->name('admin.store_service');
    Route::post('admin/delete_services',[ServiceController::class,'delete_services'])->name('admin.delete_services');

    /////////////// ACTUALITE
    Route::get('admin/actualite',[AAcutaliteController::class,'actualite'])->name('admin.actualite');
    Route::post('admin/setore_actualite',[AAcutaliteController::class,'setore_actualite'])->name('admin.setore_actualite');
    Route::post('admin/delete_actualites',[AAcutaliteController::class,'delete_actualites'])->name('admin.delete_actualites');

    ///////////////  REALISATION
    Route::get('admin/realisation',[ARealisationController::class,'realisation'])->name('admin.realisation');
    Route::post('admin/store_realisation',[ARealisationController::class,'store_realisation'])->name('admin.store_realisation');
    Route::post('admin/delete_realisation',[ARealisationController::class,'delete_realisation'])->name('admin.delete_realisation');

});

