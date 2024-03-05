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
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="gname" placeholder="Nom et Prénoms"/>
                                        <label for="gname">Nom et Prénoms</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <select class="form-control" >
                                            <option>Type d'entreprise</option>
                                            <option>Entreprise</option>
                                            <option>Association</option>
                                            <option>personnel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="gmail" placeholder="Gurdian Email"/>
                                        <label for="gmail">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cname" placeholder="Child Name"/>
                                        <label for="cname">Nom de la compagnie</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="cage" placeholder="Child Age"/>
                                        <label for="cage">Date rdv</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="time" class="form-control" id="cage" placeholder="Child Age"/>
                                        <label for="cage">Heure rdv</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cage" placeholder="Child Age"/>
                                        <label for="cage">Nombre de Personne</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Envoyer</button>
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

