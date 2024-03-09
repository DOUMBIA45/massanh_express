<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apropo;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Gallerie;
use App\Models\Partenaire;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $categories = Categorie::with('produit')->get();
        return view('admin.dashboard',['categories'=>$categories]);
    }

    public function contact(){
        $contacts = Contact::orderByDesc('id')->get();
        $categories= Categorie::all();
        return view('admin.contact',['contacts'=>$contacts,'categories'=>$categories]);
    }

    public function apropos(){
        $categories= Categorie::all();
        $aprpos = Apropo::orderBy('id','asc')->first();
        return view('admin.apropos',['categories'=>$categories,'aprpos'=>$aprpos]);
    }

    public function updateApropos(Request $request){
        $formData = $request->all();
        $photo = Apropo::where('id',$formData['id'])->first();
        $update = Apropo::where('id',$formData['id'])->update([
            'presenation_massanh'=>$formData['presenation_massanh'],
            'prestation'=>$formData['prestation'],
            'notre_forces'=>$formData['notre_forces'],
            'notre_vision'=>$formData['notre_vision'],
            'adresse_ci'=>$formData['adresse_ci'],
            'adresse_bf'=>$formData['adresse_bf'],
            'logo'=> $formData['logo'] == "undefined" ? $photo->logo  : UploadeFiles($formData['logo'],'assets/img',720,720),
        ]);

        if ($update){
            return response()->json(['code'=>200]);
        }

    }

    public function galleries(){
        $categories= Categorie::all();
        $galleries = Gallerie::orderByDesc('id')->get();
        return view('admin.galleries.index',[
            'categories'=>$categories,
            'galleries'=>$galleries,
        ]);
    }

    public function storeGallerie(Request $request){
        $formData = $request->all();
        $gallerie = new Gallerie();
        $gallerie->type = $formData['type'];
        $gallerie->media = UploadeFiles($formData['image'],'assets/img/galleries',671,480);
        $gallerie->save();
        return response()->json(['code'=>200]);
    }
    public function storeGallerieVideo(Request $request){
        $formData = $request->all();
        $gallerie = new Gallerie();
        $gallerie->type = 'video';
        $gallerie->media = $formData['link'];
        $gallerie->save();
        return response()->json(['code'=>200]);
    }

    public function deleteGalleries(Request $request){
        $delete = Gallerie::where('id',$request->ID)->delete(['id'=>$request->ID]);
        if ($delete){
            return response()->json(['code'=>200]);
        }
    }

    public function temoignages(){
        $categories = Categorie::with('produit')->get();
        $temoignages = Temoignage::orderBy('id','asc')->get();
        return view('admin.temoignages',['categories'=>$categories,'temoignages'=>$temoignages]);
    }

    public function storeTemoignages(Request $request){
        $formData = $request->all();
        $temoignages = new Temoignage();
        $temoignages->nom = $formData['nom'];
        $temoignages->photo = UploadeFiles($formData['image'],env('TEMOIGNAGE_ASSET'),720,724);
        $temoignages->description = $formData['description'];
        $temoignages->save();
        return response()->json(['code'=>200]);
    }

    public function deleteTemoignages(Request $request){
        $delete = Temoignage::where('id',$request->ID)->delete(['id'=>$request->ID]);
        if ($delete){
            return response()->json(['code'=>200]);
        }
    }

    public function priseRDV(){
        $categories = Categorie::with('produit')->get();
        return view('admin.priserdv',['categories'=>$categories]);
    }

    public function partenaires(){
        $categories = Categorie::with('produit')->get();
        $partenaires = Partenaire::orderBy('id','asc')->get();
        return view('admin.partenaires',['categories'=>$categories,'partenaires'=>$partenaires]);
    }

    public function storePartenaire(Request $request){
        $formData = $request->all();
        $partenaires = new Partenaire();
        $partenaires->titre = $formData['titre'];
        $partenaires->image = UploadeFiles($formData['image'],env('PARTENAIRE_ASSET'),320,91);
        $partenaires->save();
        return response()->json(['code'=>200]);
    }

    public function deletePartenaire(Request $request){
        $delete = Partenaire::where('id',$request->ID)->delete(['id'=>$request->ID]);
        if ($delete){
            return response()->json(['code'=>200]);
        }
    }

}
