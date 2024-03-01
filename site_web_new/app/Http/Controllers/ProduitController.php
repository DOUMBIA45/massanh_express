<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function listeProduits(){
        $title = 'Liste des produits';
        return view('produits.liste_produit',[
            'title'=>$title
        ]);
    }
}
