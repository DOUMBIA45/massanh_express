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
        $produits = Produit::with('categorie')->where('id',$_GET['produit_id'])->first();
        return view('produits.show_product',[
            'title'=>$title,
            'categories'=>$categories,
            'produits'=>$produits,
        ]);
    }

    public function commandeProduits(){
        $title = 'Liste des produits';
        $categories = Categorie::with('produit')->get();
        $produits = Produit::with('categorie')->where('id',$_GET['produit_id'])->first();
        return view('produits.commande',[
            'title'=>$title,
            'categories'=>$categories,
            'produits'=>$produits,
        ]);
    }
}

//https://laravelamit.medium.com/upload-document-and-send-in-laravel-98648014757c
