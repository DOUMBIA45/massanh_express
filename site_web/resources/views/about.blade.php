@extends('base')
@section('title')
    Equipe
@endsection

@section('content')
    <!-- Page Header Start -->
    @include('layout.head_start')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px">
                        <img class="position-absolute w-100 h-100" src="{{asset('assets/img/bienvenue.jpg')}}" alt="" style="object-fit: cover"/>
                        <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="width: 200px; height: 200px">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
                                <h1 class="text-white mb-0">{{07}}</h1>
                                <h2 class="text-white">ans</h2>
                                <h5 class="text-white mb-0">d'experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-4">PRÉSENTATION DE MASSANANH EXPERTIZ</h1>
                        <p class="fs-5 mb-4">
                            <b>MASSANANH EXPERTIZ</b>  est un ensemble de sociétés de droits nationaux
                            spécialisées dans le domaine du biomédical.
                            Elle est présente en Côte d'lvoire (SARL ou capital de 5.000.000 FCFA) et ou
                            Burkina Faso (SARL ou capital de 5.000.000 FCFA).
                            Elle se veut leader du biomédical africain.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">NOS PRESTATIONS</h3>
                    <p class="fs-5 mb-2">
                        Conseils et construction
                        Etudes et dimensionnement tous corps d'états
                        Fourniture, installation, mise en service d'équipements biomédicaux et réseaux
                        des gaz et de fluides médicaux
                        maintenances préventives et curatives des équipes
                    </p>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">NOTRE FORCE</h3>
                    <p class="fs-5 mb-2">
                        Nos équipes techniques et commerciales composées de jeunes africains
                        talentueux et expérimentés.
                    </p>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">NOTRE VISION</h3>
                    <p class="fs-5 mb-2">
                        Permettre aux différents centres de santé de se doter d'équipements de pointe
                        et d'un service après-vente de qualité à moindre coût.
                    </p>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">NOTRE VISION</h3>
                    <p class="fs-5 mb-2">
                        Permettre aux différents centres de santé de se doter d'équipements de pointe
                        et d'un service après-vente de qualité à moindre coût.
                    </p>
                </div>
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">LOCALISATION ET CONTACT</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="fs-5 mb-2">
                                <b> Abidjan:</b><br>
                                Riviera Faya, non loin du Lycée international Jules Vernes<br>
                                Tel :<a href="#">+225 27 22 46 93 23</a><br>
                                Cel :<a href="#">+225 07 77 11 62 61</a><br>
                                11 BP 374 Abidjan 11
                                <a href="#">jkouassi@massananhexpertiz.com</a><br>
                                <a href="#">massananh 1er@gmail.com</a>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="fs-5 mb-2">
                                <b> BURKINA FASO:</b><br>
                                Ouagadougou, Cité Abdoul Services de Saaba<br>
                                Tel :<a href="#">002267827 2423</a><br>
                                Whatsapp :<a href="#">+226 07 77 11 62 61</a><br>
                                <a href="#">info-ouaga@ massanahexpertiz.com</a><br>
                                Facebook :<a href="#">massananh expertiz</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5"><b>Notre équipe</b></h1>
            </div>
            <div class="row g-4">
                @foreach($equipes as $equipe)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.{{$equipe->id}}s">
                        <div class="team-item rounded">
                            <img class="img-fluid" src="{{asset(env('EQUIPE_ASSET').'/'.$equipe->image)}}" alt="" style="height: 20rem;width: 29rem"/>
                            <div class="text-center p-4">
                                <h5>{{$equipe->nom}}</h5>
                                <span>{{$equipe->fonction}}</span>
                            </div>
                            <div class="team-text text-center bg-white p-4">
                                <h5>{{$equipe->nom}}</h5>
                                <p>{{$equipe->fonction}}</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-square btn-light m-1" href="{{$equipe->l_facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-light m-1" href="{{$equipe->l_twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-light m-1" href="{{$equipe->l_linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
