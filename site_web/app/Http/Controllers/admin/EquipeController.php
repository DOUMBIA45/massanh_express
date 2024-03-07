<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function equipe(){
        $equipes = Equipe::orderBy('id', 'DESC')->get();
        $categories= Categorie::all();
        return view('admin.equipe.index',['equipes'=>$equipes,'categories'=>$categories]);
    }

    public function store_equipe(Request $request){
        $formData = $request->all();
        $equipes = new Equipe();
        $existe = Equipe::where('nom',$formData['nom'])->get();
        if (count($existe)>0){
            return response()->json(['code'=>301]);
        }else{
            $equipes->nom = $formData['nom'];
            $equipes->fonction = $formData['fonction'];
            $equipes->image = $formData['image'] == 'undefined'? null : UploadeFiles($formData['image'],env('EQUIPE_ASSET'),500,500);
            $equipes->save();
            return response()->json(['code'=>200]);
        }
    }

    public function delete_equipe(Request $request){
        $delete = Equipe::where('id',$request->ID)->delete(['id'=>$request->ID]);
        if ($delete){
            return response()->json([
                'code'=>200,
                'message'=>'equipe deleted'
            ]);
        }
    }
}
