<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProduitController extends Controller{
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
        $ref = '#'.Str::random(4).''.rand( 100, 999 );
        $produit = Produit::where('id',$request->produit_id)->first();
        $commande = new Commande();
        $commande->produit_id = $request->produit_id;
        $commande->qty = $request->qty;
        $commande->nom = $request->nom;
        $commande->prenoms = $request->prenoms;
        $commande->email = $request->email;
        $commande->telephone = $request->telephone;
        $commande->ville = $request->ville;
        $commande->adresse = $request->adresse;
        $commande->ref_commande = $ref;
        $commande->status = 'Soumis';
        $save = $commande->save();
        $fullName = $request->nom.' '.$request->prenoms;
        if ($save){
            sendEmail(
                $request->email,
                $ref, $fullName,
                $request->ville,
                $request->email,
                $request->telephone,
                $produit->image_prod,
                $produit->prix,
                $produit->description,
                $produit->nom_produit,$request->qty);
            return response()->json(['code'=>200]);
        }

    }
}

//https://laravelamit.medium.com/upload-document-and-send-in-laravel-98648014757c
