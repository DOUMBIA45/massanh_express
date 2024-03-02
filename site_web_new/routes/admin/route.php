<?php

use App\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('admin/dashboard',[AdminController::class,'index'])->name("admin.dashboard");
