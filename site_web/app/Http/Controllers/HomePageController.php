<?php

namespace App\Http\Controllers;


use App\Models\Categorie;
use App\Models\Equipe;
use App\Models\Service;
use Illuminate\Support\Facades\Hash;

class HomePageController extends Controller{

    public function HomePage(){
        $services = Service::orderBy('id','asc')->get();
        $categories = Categorie::orderBy('id','asc')->get();
        return view('welcome',[
            'services'=>$services,
            'categories'=>$categories,
        ]);
    }

    public function actualite(){
        $title = 'Actualité';
        $categories = Categorie::orderBy('id','asc')->get();
        return view('actualite',[
            'title'=>$title,
            'categories'=>$categories,
        ]);
    }

    public function travaux(){
        $title = 'Nos travaux';
        $categories = Categorie::orderBy('id','asc')->get();
        return view('travaux',[
            'title'=>$title,
            'categories'=>$categories,
        ]);
    }

    public function services(){
        $title = 'Services';
        $services = Service::orderBy('id','asc')->get();
        $categories = Categorie::orderBy('id','asc')->get();
        return view('more_service',[
            'title'=>$title,
            'services'=>$services,
            'categories'=>$categories,
            ]);
    }
    public function demande_services(){
        $title = 'Demander service';
        $services = Service::where("id",$_GET['id'])->orderBy('id','asc')->first();
        $categories = Categorie::orderBy('id','asc')->get();
        return view('demande_service',[
            'title'=>$title,
            'services'=>$services,
            'categories'=>$categories,
        ]);
    }
    public function about(){
        $title = 'A Propos de nous';
        $equipes = Equipe::orderBy('id','asc')->get();
        $categories = Categorie::orderBy('id','asc')->get();
        return view('about',[
            'title'=>$title,
            'equipes'=>$equipes,
            'categories'=>$categories,
        ]);
    }

    public function contact(){
        $title = 'Contact';
        $categories = Categorie::orderBy('id','asc')->get();
        return view('contact',[
            'title'=>$title,
            'categories'=>$categories,
        ]);
    }


}
