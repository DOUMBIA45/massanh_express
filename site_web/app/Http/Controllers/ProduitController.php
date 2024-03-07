<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function storeCommande(Request $request){
        $commande = new Commande();
        $commande->produit_id = $request->produit_id;
        $commande->qty = $request->qty;
        $commande->nom = $request->nom;
        $commande->prenoms = $request->prenoms;
        $commande->email = $request->email;
        $commande->telephone = $request->telephone;
        $commande->ville = $request->ville;
        $commande->adresse = $request->adresse;
        $commande->ref_commande ='#'.Str::random(4).''.rand( 100, 999 );
        $commande->status = 'Soumis';
        $commande->save();
        return response()->json(['code'=>200]);
    }
}

//https://laravelamit.medium.com/upload-document-and-send-in-laravel-98648014757c
