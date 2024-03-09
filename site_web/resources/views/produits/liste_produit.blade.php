@extends('base')
@section('title')
    Liste des Produits
@endsection

@section('content')
    <style>
        body{background:#eee}.ratings i{font-size: 16px;color: red}.strike-text{color: red;text-decoration: line-through}.product-image{width: 100%}.dot{height: 7px;width: 7px;margin-left: 6px;margin-right: 6px;margin-top: 3px;background-color: blue;border-radius: 50%;display: inline-block}.spec-1{color: #938787;font-size: 15px}h5{font-weight: 400}.para{font-size: 16px}
    </style>
    <!-- Packages Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4 text-white">{{$produits->category}}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-white">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$produits->category}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="container-fluid mt-5 mb-5">
            <div class="row g-2">
                <div class="col-md-3">
                    <div class="processor p-2">
                        <div class="heading d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase">Nos catégories</h6> <span>--</span>
                        </div>
                        @foreach($categories as $categorie)
                            <div class="d-flex justify-content-between mt-2">
                                <a href="{{route('listeProduits')}}?categorie_id={{$categorie->id}}&&token={{\Str::random(100)}}">
                                    <label class="form-check-label" for="flexCheckDefault"><b>{{$categorie->category}}</b></label>
                                </a> <span>{{count($categorie->produit)}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="container mt-5 mb-5">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-10">
                                @foreach($produits->produit as $produit)
                                <div class="row mt-3 bg-white border rounded">
                                    <div class="col-md-3 mt-1">
                                        <img class="img-fluid img-responsive rounded product-image" src="{{asset(env('PRODUIT_ASSET').'/'.$produit->image_prod)}}" style="height: 160px">
                                    </div>
                                    <div class="col-md-6 mt-1">
                                        <h5>{{$produit->nom_produit}}</h5>
                                        <div class="d-flex flex-row">
                                            <div class="ratings mr-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="mt-1 mb-1 spec-1 btn btn-primary"><span>- {{$produit->promotion}}%</span></div>

                                        <p class="text-justify text-truncate para mb-0">
                                            {!! $produit->description !!}
                                            <br></p>
                                    </div>
                                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                                        <div class="d-flex flex-row align-items-center mt-4">
                                            <h5 class="mr-1">{{format_number($produit->prix)}}</h5>
                                        </div>
                                        <div class="d-flex flex-column mt-4">
                                            <a href="{{route('showPorduct')}}?produit_id={{$produit->id}}&&token={{\Str::random(100)}}" class="btn btn-primary btn-sm mt-4" type="button"><i class="fa fa-eye"></i> Voir plus</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection
