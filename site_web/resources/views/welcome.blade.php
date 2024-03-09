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
                        <img class="position-absolute w-100 h-100" src="{{asset('assets/img/'.$aprpos->logo)}}" alt="" style="object-fit: cover"/>
                        <div class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3" style="width: 200px; height: 200px">
                            <div class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3">
                                <h1 class="text-white mb-0">{{getAge($aprpos->anne_creation)}}</h1>
                                <h5 class="text-white mb-0">d'experience</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-4">PRÉSENTATION DE MASSANANH EXPERTIZ</h1>
                        <p class="fs-5 mb-4">
                            {!! $aprpos->presenation_massanh !!}
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
                        <h1 class="text-white mb-4">Nos côtes de popularité</h1>
                        <p class="text-light mb-5">
                            Des preuves qui attestent que nous existons longtemps et sommes connus par un grand nombre de la population
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 px-4 pe-lg-0">
                        <div class="row g-5">
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">clients satisfaits</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Projets réalisés</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Followers Facebook</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="display-5" data-toggle="counter-up">1234</h1>
                                <p class="fs-5 text-primary">Abonnés Youtube</p>
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
                <h1 class="display-6 mb-5">Nos prestations de services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{$service->id}}s">
                        <div class="service-item rounded h-100 p-5">
                            <div class="d-flex align-items-center ms-n5 mb-4">
                                <div class="service-icon flex-shrink-0  rounded-end me-4">
                                    <img class="img-fluid" src="{{asset(env('SERVICES_ASSET').'/'.$service->images)}}" alt=""/>
                                </div>
                                <h4 class="mb-0">{{$service->titre}}</h4>
                            </div>
                            <div class="mb-4">{!! $service->description !!}</div>
                            <a class="btn btn-light px-3" href="{{route('demande_services')}}?id={{$service->id}}&&token={{\Str::random(100)}}">Demander le service</a>
                        </div>
                    </div>
                @endforeach
            </div><br>
            <center>
                <a class="btn btn-primary  p-3" href="{{route('services')}}?token={{\Str::random(100)}}" style="width: 20rem"><b>Voir plus</b></a>
            </center>
        </div>
    </div>
    <!-- Service End -->
    <div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Nous sommes une entreprise de construction hospitalière</h1>
                    <p class="text-white mb-5">Pour tous vos conseils, suivi et construction hospitalière, veuillez prendre rendez avec nos experts du domaine.</p>
                    <div class="bg-white rounded p-3">
                        <div class="d-flex align-items-center bg-primary rounded p-3">
                            <img class="flex-shrink-0 rounded-circle me-3" src="{{asset('asset/img/profile.jpg')}}" alt=""/>
                            <h5 class="text-white mb-0">Contactez-nous: +225 07 77 11 62 61</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  placeholder="Nom et Prénoms" name="fullName"/>
                                        <label for="gname">Nom</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  placeholder="Nom et Prénoms" name="fullName"/>
                                        <label for="gname">Prénoms</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <select class="form-control" name="type_entreprise">
                                            <option value="A">Type de structure</option>
                                            <option>Entreprise</option>
                                            <option>Association</option>
                                            <option>personnel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  placeholder="Nom de la structure" name="fullName"/>
                                        <label for="gname">Nom de la structure</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email"/>
                                        <label for="gmail">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  placeholder="Numéro de téléphone" name="telephone"/>
                                        <label for="cname">Numéro de téléphone</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="date_rdv"/>
                                        <label for="cage">Date rdv</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" name="heure_rdv"/>
                                        <label for="cage">Heure rdv</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <textarea type="text" class="form-control" name="message"></textarea>
                                        <label for="cage">Objet du RDV (objet du Rendez-vous)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit" id="RDV"><b>Confirmer RDV</b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        @foreach($temoignages as $temoignage)
                            <div class="testimonial-item text-center">
                                <img class="img-fluid rounded mx-auto mb-4" src="{{asset(env('TEMOIGNAGE_ASSET').'/'.$temoignage->photo)}}" alt=""/>
                                <p class="fs-5">{{$temoignage->description}}</p>
                                <h5>{{$temoignage->nom}}</h5>
                            </div>
                        @endforeach
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
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-2">Nos Partenaires</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="lc-block">
                    <div id="carouselLogos" class="carousel slide pt-5 pb-2" data-bs-ride="carousel">
                        <div class="carousel-inner px-5">
                            @foreach($partenaires as $key =>$partenaire)
                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                <div class="row justify-content-center">
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="{{asset(env('PARTENAIRE_ASSET').'/'.$partenaire->image)}}" alt="">
                                        <h4 class="text-center">{{$partenaire->titre}}</h4>
                                    </div>
                                    <div class="col-6 col-lg-2  align-self-center">
                                        <img class="d-block w-100 px-3  mb-3" src="{{asset(env('PARTENAIRE_ASSET').'/'.$partenaire->image)}}" alt="">
                                        <h4 class="text-center">{{$partenaire->titre}}</h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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

@push('script')
    @include('ajax.rdv')
@endpush
