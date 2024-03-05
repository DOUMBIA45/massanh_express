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
            </div>
        </div>
    </div>
@endsection
