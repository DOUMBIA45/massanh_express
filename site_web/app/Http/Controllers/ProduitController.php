<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function listeProduits(){
        $title = 'Liste des produits';
        $categories = Categorie::with('produit')->get();
        $produits = Categorie::with('produit')->where('id',$_GET['categorie_id'])->orderBy('id','desc')->first();
        return view('produits.liste_produit',[
            'title'=>$title,
            'categories'=>$categories,
            'produits'=>$produits,
        ]);
    }

    public function showPorduct(){
        $title = 'Liste des produits';
        $categories = Categorie::with('produit')->get();
        return view('produits.show_product',[
            'title'=>$title,
            'categories'=>$categories,
        ]);
    }
}
