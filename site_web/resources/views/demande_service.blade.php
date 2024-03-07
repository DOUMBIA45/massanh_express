@extends('base')
@section('title')
    Les services
@endsection

@section('content')
    @include('layout.head_start')
    <!-- Appointment Start -->
    <div class="container appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">{{$services->titre}}</h1>
                    <p class="text-white mb-5">{!! $services->description !!}</p>
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
                            <input type="hidden" name="service_id" value="{{$services->id}}">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  placeholder="Nom" name="nom"/>
                                        <label for="gname">Nom</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control"  placeholder="Prénoms" name="prenoms"/>
                                        <label for="gname">Prénoms</label>
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
                                        <input type="text" class="form-control" name="ville" placeholder=""/>
                                        <label for="cage">Ville</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="adresse" placeholder=""/>
                                        <label for="cage">Adresse de la ville</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <textarea type="text" class="form-control" name="description" placeholder=""></textarea>
                                        <label for="cage">Description du service</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit" id="DemanderService"><b>Demander le service</b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
@endsection

@push('script')
    @include('ajax.demande_service')
@endpush

