<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProduitController extends Controller
{
    public function index(){
        $produits = Produit::with('categorie')->get();

        return view('admin.produits.index',[
            'produits'=>$produits
        ]);
    }

    public function show_produits(){
        $produits = Produit::with('categorie')->where('id',$_GET['produit_id'])->orderBy('id', 'DESC')->first();
        return view('admin.produits.show',[
            'produits'=>$produits
        ]);
    }
    public function update_produits(){
        $categories = Categorie::orderBy('id', 'DESC')->orderBy('id', 'DESC')->get();
        $produits = Produit::with('categorie')->where('id',$_GET['produit_id'])->orderBy('id', 'DESC')->first();
        return view('admin.produits.update',[
            'produits'=>$produits,
            'categories'=>$categories,
        ]);
    }

    public function add_produits(){
        $categories = Categorie::orderBy('id', 'DESC')->orderBy('id', 'DESC')->get();
        return view('admin.produits.add',['categories'=>$categories]);
    }

    public function store_produits(Request $request){
        $formData = $request->all();
        $produits = new Produit();
        $produits->categorie_id = $formData['categorie_id'];
        $produits->promotion = $formData['promotion'];
        $produits->nom_produit = $formData['nom_produit'];
        $produits->description = $formData['description'];
        $produits->prix = $formData['prix'];
        $produits->qty_stock = $formData['qty_stock'];
        $produits->ref_prod = '#'.Str::random(4).''.rand( 100, 999 );
        $produits->image_prod = UploadeFiles($formData['image_prod'],env('PRODUIT_ASSET'),735,980);
        $produits->save();
        return response()->json([
            'code'=>200,
            'message'=>'produit ajouté'
        ]);
    }

    public function store_update_produits(Request $request){
        $formData = $request->all();
        $prod = Produit::where('id',$formData['produit_id'])->first();
        $produits = Produit::where('id',$formData['produit_id'])->update([
            'categorie_id'=>$formData['categorie_id'],
            'promotion'=>$formData['promotion'],
            'nom_produit'=>$formData['nom_produit'],
            'description'=>$formData['description'],
            'prix'=>$formData['prix'],
            'qty_stock'=>$formData['qty_stock'],
            'image_prod'=> $formData['image_prod'] == 'undefined'? $prod->image_prod : UploadeFiles($formData['image_prod'],env('PRODUIT_ASSET'),735,980),
        ]);
        if ($produits){
            return response()->json([
                'code'=>200,
                'message'=>'produit ajouté'
            ]);
        }
    }
    public function delete_produits(Request $request){
        $delete = Produit::where('id',$request->ID)->delete(['id'=>$request->ID]);
        if ($delete){
            return response()->json([
                'code'=>200,
                'message'=>'produit deleted'
            ]);
        }
    }

}
