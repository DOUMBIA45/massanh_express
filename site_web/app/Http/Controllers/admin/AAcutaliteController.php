<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\Categorie;
use Illuminate\Http\Request;

class AAcutaliteController extends Controller
{

    public function actualite(){
        $actualistes = Actualite::orderBy('id', 'DESC')->get();
        $categories= Categorie::all();
        return view('admin.actualite_realisation.actualites',['actualistes'=>$actualistes,'categories'=>$categories]);
    }

    public function setore_actualite(Request $request){
        $formData = $request->all();
        $actualites = new  Actualite();
        $actualites->description = $formData['description'];
        $actualites->image =$formData['image'] == 'undefined'? null : UploadeFiles($formData['image'],env('ACTUALITE_ASSET'),500,500);
        $actualites->save();
        return response()->json([
            'code'=>200,
            'message'=>'actualité ajoutée'
        ]);
    }
    public function delete_actualites(Request $request){
        $delete = Actualite::where('id',$request->ID)->delete(['id'=>$request->ID]);
        if ($delete){
            return response()->json([
                'code'=>200,
                'message'=>'service deleted'
            ]);
        }
    }

}
