<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apropo;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Gallerie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
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



}
