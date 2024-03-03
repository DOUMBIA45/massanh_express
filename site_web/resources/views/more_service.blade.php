@extends('base')
@section('title')
    Les services
@endsection

@section('content')
    @include('layout.head_start')
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
                        <a class="btn btn-light px-3" href="">Demander le service</a>
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
            </div>
        </div>
    </div>
@endsection
