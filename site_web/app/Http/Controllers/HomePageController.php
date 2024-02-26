<?php

namespace App\Http\Controllers;


class HomePageController extends Controller
{
    public function HomePage(){
        return view('welcome');
    }

    public function actualite(){
        $title = 'Actualité';
        return view('actualite',[
            'title'=>$title
        ]);
    }


    public function equipe(){
        $title = 'Equipe';
        return view('equipe',[
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
