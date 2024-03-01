@extends('base')
@section('title')
 Accueil
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/img/baniere1.jpg')}}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown text-white">
                                        Construction de l'hôpital Général de Ferkessedougou
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/img/baniere2.jpg')}}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown text-white">
                                        Installation au CHR de San-Pédro
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/img/baniere3.jpg')}}" alt="Image" />
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <h1 class="display-3 text-dark mb-4 animated slideInDown text-white">
                                        Maintenance préventive
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
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
                        <h1 class="display-6 mb-5">BIENVENUE A MASSANANH EXPERTIZ</h1>
                        <p class="fs-5 mb-4">
                            <b>MASSANANH EXPERTIZ</b> est une entreprise de construction hospitalier - Fourniture, installation, formation et mise en service d'équipements biomédicaux - Fourniture de consommables biomédicaux, Fabrication, vente, Distribution de tout produits pharmaceutiques et équipements biomédicaux - Fourniture de bureaux et mobilier biomédicaux - Représentation et importation pour le compte de sociétés locales et étrangères.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container overflow-hidden my-5 px-lg-0">
        <div class="container facts px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-70 px-4 ps-lg-0">
                        <h1 class="text-white mb-4">For Individuals And Organisations</h1>
                        <br><br><br>
                    </div>
                </div>
                <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-70 px-4 pe-lg-0">
                        <div class="row g-5">
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Clients satisfaits</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Les projets réussissent</p>
                            </div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">Prestation de services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="{{asset('assets/img/icon/icon-10-light.png')}}" alt=""/>
                            </div>
                            <h4 class="mb-0">Construction civil et hospilolière</h4>
                        </div>
                        <p class="mb-4">
                            Calcul, dimensionnement, Etudes, Gros æuvres, Plomberie. Electricité, Coneloge, Montcge de ponneoux préfobriqués, Foux plofonds, Peinture, Vidéosurveillonce.
                        </p>
                        <a class="btn btn-light px-3" href="">Demander le service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="{{asset('assets/img/icon/icon-01-light.png')}}" alt=""/>
                            </div>
                            <h4 class="mb-0">Imagérie médicale</h4>
                        </div>
                        <p class="mb-4">
                            Radiographie os-poumons, échographie, mommographie, table télécommandée, amplificateur de brillance et scanner.
                        </p>
                        <a class="btn btn-light px-3" href="">Démander le service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="{{asset('assets/img/icon/icon-01-light.png')}}" alt=""/>
                            </div>
                            <h4 class="mb-0">Imagérie médicale</h4>
                        </div>
                        <p class="mb-4">
                            Radiographie os-poumons, échographie, mommographie, table télécommandée, amplificateur de brillance et scanner.
                        </p>
                        <a class="btn btn-light px-3" href="">Démander le service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100 p-5">
                        <div class="d-flex align-items-center ms-n5 mb-4">
                            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                                <img class="img-fluid" src="{{asset('assets/img/icon/icon-01-light.png')}}" alt=""/>
                            </div>
                            <h4 class="mb-0">Imagérie médicale</h4>
                        </div>
                        <p class="mb-4">
                            Radiographie os-poumons, échographie, mommographie, table télécommandée, amplificateur de brillance et scanner.
                        </p>
                        <a class="btn btn-light px-3" href="">Démander le service</a>
                    </div>
                </div>
            </div><br>
            <a class="btn btn-primary float-end p-3 "><b>Voir plus</b></a>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">Nos parténaires</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="{{asset('assets/img/testimonial-1.jpg')}}" alt=""/>
                        <img class="img-fluid animated pulse infinite" src="{{asset('assets/img/testimonial-2.jpg')}}" alt=""/>
                        <img class="img-fluid animated pulse infinite" src="{{asset('assets/img/testimonial-3.jpg')}}" alt=""/>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="{{asset('assets/img/testimonial-1.jpg')}}" alt=""/>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="{{asset('assets/img/testimonial-2.jpg')}}" alt=""/>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="{{asset('assets/img/testimonial-3.jpg')}}" alt=""/>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="{{asset('assets/img/testimonial-1.jpg')}}" alt=""/>
                        <img class="img-fluid animated pulse infinite" src="{{asset('assets/img/testimonial-2.jpg')}}" alt=""/>
                        <img class="img-fluid animated pulse infinite" src="{{asset('assets/img/testimonial-3.jpg')}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
