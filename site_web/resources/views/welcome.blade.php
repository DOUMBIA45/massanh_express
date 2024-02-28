@extends('base')
@section('title')
 Accueil
@endsection

@section('content')
    <!-- About Start -->
    <div class="container-fluid about">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-60" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="{{asset('assets/img/bienvenue.jpg')}}" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url({{asset('img/about-img-1.png')}});">
                    <h5 class="section-about-title pe-3">Bienvenue sur</h5>
                    <h1 class="mb-4">Massanh Express</h1>
                    <p class="mb-4" style="font-size: 20px">
                        <b>MASSANANH EXPERTIZ</b> est une entreprise de construction hospitalier - Fourniture, installation, formation et mise en service d'équipements biomédicaux - Fourniture de consommables biomédicaux, Fabrication, vente, Distribution de tout produits pharmaceutiques et équipements biomédicaux - Fourniture de bureaux et mobilier biomédicaux - Représentation et importation pour le compte de sociétés locales et étrangères.
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="text-center">
                            <p class="mb-0"><b>services 24h/24 et 7j/7 </b></p>
                            <a class="btn btn-primary just rounded-pill py-3 px-5 mt-2" href="">Lire plus</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid bg-light service py-1">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Prestation de services</h5>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/service.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-3">Construction civil et hospilolière</h5>
                                <p class="mb-4">{{substr('Colcul, dimensionnement, Etudes, Gros æuvres, Plomberie. Electricité, Coneloge, Montcge de ponneoux préfobriqués, Foux plofonds, Peinture, Vidéosurveillonce.',0,115)}}...</p>
                            </div>
                            <div class="text-center bg-primary rounded-bottom mx-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4"><i class="fa fa-eye"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/service.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-3">Imagérie médicale</h5>
                                <p class="mb-4">{{substr('Radiographie os-poumons, échographie, mommographie, table télécommandée, amplificateur de brillance et scanner.',0,115)}}...</p>
                            </div>
                            <div class="text-center bg-primary rounded-bottom mx-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4"><i class="fa fa-eye"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/service.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-3">Consultations</h5>
                                <p class="mb-4">{{substr('Générale, chirurgie, pédiatrique, gynécologique, dentaire, ORL et ophtalmologie',0,115)}}</p>
                            </div>
                            <div class="text-center bg-primary rounded-bottom mx-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4"><i class="fa fa-eye"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/service.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-3">Bloc opéroloire</h5>
                                <p class="mb-4">{{substr('Chirurgie, gynécologique, orthopédique, endoscopie',0,115)}}</p>
                            </div>
                            <div class="text-center bg-primary rounded-bottom mx-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4"><i class="fa fa-eye"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/service.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-3">Laboraloire</h5>
                                <p class="mb-4">{{substr('outo*or"r, microscopes, centrifugeuses, petits motériels, vererie et consommobles',0,115)}}</p>
                            </div>
                            <div class="text-center bg-primary rounded-bottom mx-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4"><i class="fa fa-eye"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/service.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-3">Réseaux de gaz et de fluides médicaux</h5>
                                <p class="mb-4">{{substr('Centroles, canalisations, régulation et terminaux ',0,115)}}</p>
                            </div>
                            <div class="text-center bg-primary rounded-bottom mx-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4"><i class="fa fa-eye"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/service.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-3">Stérilisotion</h5>
                                <p class="mb-4">{{substr('Petie, Moyenne et gronde capacité ',0,60)}} ..</p>
                            </div>
                            <div class="text-center bg-primary rounded-bottom mx-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4"><i class="fa fa-eye"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{asset('assets/img/service.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-3">Destruction des déchets hospitaliers</h5>
                                <p class="mb-4">{{substr('Incinérateurs et banaliseurs ',0,60)}} ..</p>
                            </div>
                            <div class="text-center bg-primary rounded-bottom mx-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4"><i class="fa fa-eye"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Témoignages</h5>
            </div>
            <div class="testimonial-carousel owl-carousel">
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset('assets/img/t1.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">Abidjan, Côte d'Ivoire</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset('assets/img/t2.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">Abidjan, Côte d'Ivoire</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset('assets/img/t1.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">Bouaké, Côte d'Ivoire</p>
                    </div>
                </div>
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis nostrum cupiditate, eligendi repellendus saepe illum earum architecto dicta quisquam quasi porro officiis. Vero reiciendis,
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset('assets/img/t2.jpg')}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">John Abraham</h5>
                        <p class="mb-0">Yamoussoukro, Côte d'Ivoire</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
