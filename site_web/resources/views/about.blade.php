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
    <div class="container-xl">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">NOS PRESTATIONS</h3>
                    {!! $aprpos->prestation !!}
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">NOTRE FORCE</h3>
                    {!! $aprpos->notre_forces !!}
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">NOTRE VISION</h3>
                   {!! $aprpos->notre_vision !!}
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="display- mt-3">LOCALISATION ET CONTACT</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="fs-5 mb-2">
                                <b> Abidjan:</b><br>
                                {!! $aprpos->adresse_ci !!}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="fs-5 mb-2">
                                <b>Burkina Faso:</b><br>
                               {!! $aprpos->adresse_bf !!}
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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
