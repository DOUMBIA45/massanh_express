<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\DemandeService;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function services(){
        $services = Service::orderBy('id', 'DESC')->get();
        $categories= Categorie::all();
        return view("admin.services.index",['services'=>$services,'categories'=>$categories]);
    }

    public function store_service(Request $request){
        $formData = $request->all();
        $existe = Service::where('titre',$formData['titre'])->get();
        if (count($existe)>0){
            return response()->json([
                'code'=>301,
                'message'=>'service existe déjà'
            ]);
        }else{
            $services = new Service();
            $services->titre = $formData['titre'];
            $services->description = $formData['description'];
            $services->images = $formData['image'] == 'undefined'? null : UploadeFiles($formData['image'],env('SERVICES_ASSET'),64,64);
            $services->save();
            return response()->json([
                'code'=>200,
                'message'=>'service existe déjà'
            ]);
        }

    }

    public function delete_services(Request $request){
        $delete = Service::where('id',$request->ID)->delete(['id'=>$request->ID]);
        if ($delete){
            return response()->json([
                'code'=>200,
                'message'=>'service deleted'
            ]);
        }
    }

    public function demande_services(){
        $demandes = DemandeService::with('service')->orderByDesc('id')->get();
        $categories= Categorie::all();
        return view('admin.services.demande',['demandes'=>$demandes,'categories'=>$categories]);
    }

}
