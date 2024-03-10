<?php

use App\Http\Controllers\Admin\AAcutaliteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ARealisationController;
use App\Http\Controllers\Admin\EquipeController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin/dashboard',[AdminController::class,'index'])->name("admin.dashboard");

    Route::get('admin/contact',[AdminController::class,'contact'])->name("admin.contact");
    Route::get('admin/apropos',[AdminController::class,'apropos'])->name("admin.apropos");
    Route::post('admin/updateApropos',[AdminController::class,'updateApropos'])->name("admin.updateApropos");

    Route::get('admin/statistiques',[AdminController::class,'statistiques'])->name("admin.statistiques");
    Route::post('admin/updatePopularity',[AdminController::class,'updatePopularity'])->name("admin.updatePopularity");

    ////////////////////// gallerie
    Route::get('admin/galleries',[AdminController::class,'galleries'])->name('admin.galleries');
    Route::post('admin/storeGallerie',[AdminController::class,'storeGallerie'])->name('admin.storeGallerie');
    Route::post('admin/storeGallerieVideo',[AdminController::class,'storeGallerieVideo'])->name('admin.storeGallerieVideo');
    Route::post('admin/deleteGalleries',[AdminController::class,'deleteGalleries'])->name('admin.deleteGalleries');

    Route::get('admin/temoignages',[AdminController::class,'temoignages'])->name('admin.temoignages');
    Route::post('admin/storeTemoignages',[AdminController::class,'storeTemoignages'])->name('admin.storeTemoignages');
    Route::post('admin/deleteTemoignages',[AdminController::class,'deleteTemoignages'])->name('admin.deleteTemoignages');

    Route::get('admin/priseRDV',[AdminController::class,'priseRDV'])->name('admin.priseRDV');

    Route::get('admin/partenaires',[AdminController::class,'partenaires'])->name('admin.partenaires');
    Route::post('admin/storePartenaire',[AdminController::class,'storePartenaire'])->name('admin.storePartenaire');
    Route::post('admin/deletePartenaire',[AdminController::class,'deletePartenaire'])->name('admin.deletePartenaire');

    ///////////////////////// ROUTE SERVICES //////////////
    Route::get('admin/services',[ServiceController::class,'services'])->name('admin.services');
    Route::post('admin/store_service',[ServiceController::class,'store_service'])->name('admin.store_service');
    Route::post('admin/delete_services',[ServiceController::class,'delete_services'])->name('admin.delete_services');
    Route::get('admin/demande_services',[ServiceController::class,'demande_services'])->name('admin.demande_services');

    /////////////// ACTUALITE
    Route::get('admin/actualite',[AAcutaliteController::class,'actualite'])->name('admin.actualite');
    Route::post('admin/setore_actualite',[AAcutaliteController::class,'setore_actualite'])->name('admin.setore_actualite');
    Route::post('admin/delete_actualites',[AAcutaliteController::class,'delete_actualites'])->name('admin.delete_actualites');

    ///////////////  REALISATION
    Route::get('admin/realisation',[ARealisationController::class,'realisation'])->name('admin.realisation');
    Route::post('admin/store_realisation',[ARealisationController::class,'store_realisation'])->name('admin.store_realisation');
    Route::post('admin/delete_realisation',[ARealisationController::class,'delete_realisation'])->name('admin.delete_realisation');

    /////////////////////// ROUTE EQUIPE
    Route::get('admin/equipe',[EquipeController::class,'equipe'])->name('admin.equipe');
    Route::post('admin/store_equipe',[EquipeController::class,'store_equipe'])->name('admin.store_equipe');
    Route::post('admin/delete_equipe',[EquipeController::class,'delete_equipe'])->name('admin.delete_equipe');

    ///////////////////////// ROUTES PRODUITS

    Route::get('admin/produits',[ProduitController::class,'index'])->name('admin.produits');
    Route::get('admin/add_produits',[ProduitController::class,'add_produits'])->name('admin.add_produits');
    Route::post('admin/store_produits',[ProduitController::class,'store_produits'])->name('admin.store_produits');
    Route::get('admin/show_produits',[ProduitController::class,'show_produits'])->name('admin.show_produits');
    Route::get('admin/update_produits',[ProduitController::class,'update_produits'])->name('admin.update_produits');
    Route::post('admin/store_update_produits',[ProduitController::class,'store_update_produits'])->name('admin.store_update_produits');
    Route::post('admin/delete_produits',[ProduitController::class,'delete_produits'])->name('admin.delete_produits');

});

