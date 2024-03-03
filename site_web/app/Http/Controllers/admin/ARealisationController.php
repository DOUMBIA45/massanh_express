<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use Illuminate\Http\Request;

class ARealisationController extends Controller
{
    public function realisation(){
        $realisations = Realisation::orderBy('id', 'DESC')->get();
        return view('admin.actualite_realisation.realisations',['realisations'=>$realisations]);
    }


    public function store_realisation(Request $request){
        $formData = $request->all();
        $actualites = new  Realisation();
        $actualites->description = $formData['description'];
        $actualites->image =$formData['image'] == 'undefined'? null : UploadeFiles($formData['image'],env('ACTUALITE_ASSET'),500,500);
        $actualites->save();
        return response()->json([
            'code'=>200,
            'message'=>'actualité ajoutée'
        ]);
    }
    public function delete_realisation(Request $request){
        $delete = Realisation::where('id',$request->ID)->delete(['id'=>$request->ID]);
        if ($delete){
            return response()->json([
                'code'=>200,
                'message'=>'service deleted'
            ]);
        }
    }
}
