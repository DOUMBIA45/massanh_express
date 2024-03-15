<?php

namespace App\Http\Controllers;


use App\Models\Actualite;
use App\Models\Album;
use App\Models\Apropo;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\DemandeService;
use App\Models\Equipe;
use App\Models\Gallerie;
use App\Models\Newsletter;
use App\Models\Partenaire;
use App\Models\Popularity;
use App\Models\Rdv;
use App\Models\Realisation;
use App\Models\Service;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Symfony\Component\String\s;

class HomePageController extends Controller{

    public function HomePage(){
        $services = Service::orderBy('id','desc')->limit(4)->get();
        $categories = Categorie::orderBy('id','asc')->get();
        $aprpos = Apropo::orderBy('id','asc')->first();
        $partenaires = Partenaire::orderBy('id','asc')->get();
        $temoignages = Temoignage::orderBy('id','asc')->get();
        $populairties = Popularity::orderBy('id','asc')->first();
        $equipes = Equipe::orderBy('id','asc')->get();
        return view('welcome',[
            'services'=>$services,
            'categories'=>$categories,
            'aprpos'=>$aprpos,
            'partenaires'=>$partenaires,
            'temoignages'=>$temoignages,
            'populairties'=>$populairties,
            'equipes'=>$equipes,
        ]);
    }

    public function addRdv(Request $request){
        $getrdv = Rdv::where('date_rdv',$request['date_rdv'])->get();
        if (count($getrdv)>0){
            return response()->json(['code'=>301]);
        }else{
            $rdv = new Rdv();
            $rdv->fullName = $request['nom'].' '.$request['prenoms'];
            $rdv->type_entreprise = $request['type_entreprise'];
            $rdv->nom_structure = $request['nom_structure'];
            $rdv->email = $request['email'];
            $rdv->telephone = $request['telephone'];
            $rdv->date_rdv = $request['date_rdv'];
            $rdv->heure_rdv = $request['heure_rdv'];
            $rdv->message = $request['message'];
            $save = $rdv->save();
            if ($save){
                return response()->json(['code'=>200]);
            }
        }
    }

    public function actualite(){
        $title = 'Actualité';
        $categories = Categorie::orderBy('id','asc')->get();
        $actualites = Actualite::orderBy('id','asc')->get();
        return view('actualite',[
            'title'=>$title,
            'categories'=>$categories,
            'actualites'=>$actualites,
        ]);
    }

    public function travaux(){
        $title = 'Nos travaux';
        $categories = Categorie::orderBy('id','asc')->get();
        $realisations = Realisation::orderBy('id','asc')->get();
        return view('travaux',[
            'title'=>$title,
            'categories'=>$categories,
            'realisations'=>$realisations,
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

    public function storeDemandeService(Request $request){
        $services = new DemandeService();
        $services->service_id = $request->service_id;
        $services->nom = $request->nom;
        $services->prenoms = $request->prenoms;
        $services->nom_structure = $request->nom_structure;
        $services->type_entreprise = $request->type_entreprise;
        $services->email = $request->email;
        $services->telephone = $request->telephone;
        $services->ville = $request->ville;
        $services->adresse = $request->adresse;
        $services->description = $request->description;
        $services->save();
        return response()->json(['code'=>200]);
    }

    public function galleries(){
        $title = 'Notre page de gallérie';
        $categories = Categorie::orderBy('id','desc')->get();
        $videos = Gallerie::where('type','=','video')->orderBy('id','desc')->get();
        $photos = Gallerie::where('type','=','photo')->orderBy('id','desc')->get();
        $albums = Album::with('photo')->orderBy('id','desc')->get();
        return view('galleries',[
            'title'=>$title,
            'categories'=>$categories,
            'photos'=>$photos,
            'videos'=>$videos,
            'albums'=>$albums,
        ]);
    }
    public function about(){
        $title = 'A Propos de nous';
        $categories = Categorie::orderBy('id','asc')->get();
        $aprpos = Apropo::orderBy('id','asc')->first();
        return view('about',[
            'title'=>$title,
            'categories'=>$categories,
            'aprpos'=>$aprpos,
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

    public function addContact(Request $request){
        $contacts = new Contact();
        $contacts->fullName = $request->fullName;
        $contacts->email = $request->email;
        $contacts->sujet = $request->sujet;
        $contacts->message = $request->message;
        $save = $contacts->save();
        if ($save){
            return response()->json(['code'=>200]);
        }
    }

    public function addNewLetter(Request $request){
        $verify = Newsletter::where('email',$request->email)->get();
        if (count($verify)>0){
            return response()->json(['code'=>301]);
        }else{
            $new = new Newsletter();
            $new->email = $request->email;
            $new->save();
            return response()->json(['code'=>200]);
        }
    }


    public function Logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
