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
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
        <div class="container facts px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 px-4 ps-lg-0">
                        <h1 class="text-white mb-4">For Individuals And Organisations</h1>
                        <p class="text-light mb-5">
                            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                            Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                            sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <a href="" class="align-self-start btn btn-secondary py-3 px-5">More Details</a>
                    </div>
                </div>
                <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 px-4 pe-lg-0">
                        <div class="row g-5">
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Happy Clients</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Projects Succeed</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Awards Achieved</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Team Members</p>
                            </div>
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
                <h1 class="display-6 mb-5">Prestations de services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
                        <a class="btn btn-light px-3" href="{{route('demande_services')}}?token={{\Str::random(100)}}">Demander le service</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
            <a class="btn btn-primary float-end p-3" href="{{route('services')}}?token={{\Str::random(100)}}"><b>Voir plus</b></a>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto" style="max-width: 500px">
                <h1 class="display-6 mb-5">Témoignages</h1>
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
                            <img class="img-fluid rounded mx-auto mb-4" src="{{asset('assets/img/temoignage/t1.png')}}" alt=""/>
                            <p class="fs-5">
                                Bravo Massananh Expertiz
                                J’ai vu le CHR DE MAN les travaux sont à la hauteur des équipements…merci de présenter ces équipements et qui j’espère seront utilisés en bon usage pour ces DG différents établissements hospitaliers pour le bien être de la collectivité.
                            </p>
                            <h5>Vanly TIENE</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="{{asset('assets/img/temoignage/t2.png')}}" alt=""/>
                            <p class="fs-5">
                                Seuls les actes parlent. Mes vives et chaleureuses félicitations. Massananh Expertiz un jour, Massananh Expertiz toujours.
                            </p>
                            <h5>Denis EFFI</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="{{asset('assets/img/temoignage/t3.png')}}" alt=""/>
                            <p class="fs-5">
                                Félicitations à vous Monsieur le Directeur de MASSANANH EXPERTIZ et à toute votre équipe pour ce beau boulot abattu.
                            </p>
                            <h5>Regi Tendance</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="{{asset('assets/img/temoignage/t4.png')}}" alt=""/>
                            <p class="fs-5">
                                Ça va vite avec Massananh expertiz.
                            </p>
                            <h5>Williams ATSE</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid rounded mx-auto mb-4" src="{{asset('assets/img/temoignage/t5.png')}}" alt=""/>
                            <p class="fs-5">
                                Meilleure des Meilleures entreprises en matière de services biomedicales. Testez et vous verez.
                            </p>
                            <h5>David YAO</h5>
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
    <hr>
    <div class="container py-2">
        <div class="row">
            <div class="col-md-12">
                <div class="lc-block">
                    <div id="carouselLogos" class="carousel slide pt-5 pb-4" data-bs-ride="carousel">
                        <div class="carousel-inner px-5">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-6 col-lg-2 align-self-center">
                                        <img class="d-block w-100 px-3 mb-3" src="https://cdn.livecanvas.com/media/logos/11.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/2.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/3.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/12.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/5.png" alt="">
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="https://cdn.livecanvas.com/media/logos/6.png" alt="">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="w-100 px-3 text-center mt-4">
                            <a class="carousel-control-prev position-relative d-inline me-4" href="#carouselLogos" data-bs-slide="prev">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                </svg>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next position-relative d-inline" href="#carouselLogos" data-bs-slide="next">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div><!-- /lc-block -->
            </div><!-- /col -->
        </div>
    </div>

@endsection
