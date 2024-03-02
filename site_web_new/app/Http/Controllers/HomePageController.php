<?php

namespace App\Http\Controllers;


class HomePageController extends Controller{

    public function HomePage(){
        return view('welcome');
    }

    public function actualite(){
        $title = 'Actualité';
        return view('actualite',[
            'title'=>$title
        ]);
    }

    public function travaux(){
        $title = 'Nos travaux';
        return view('travaux',[
            'title'=>$title
        ]);
    }

    public function services(){
        $title = 'Services';
        return view('more_service',['title'=>$title]);
    }
    public function demande_services(){
        $title = 'Demander service';
        return view('demande_service',['title'=>$title]);
    }
    public function about(){
        $title = 'A Propos de nous';
        return view('about',[
            'title'=>$title
        ]);
    }

    public function contact(){
        $title = 'Contact';
        return view('contact',[
            'title'=>$title
        ]);
    }


}
