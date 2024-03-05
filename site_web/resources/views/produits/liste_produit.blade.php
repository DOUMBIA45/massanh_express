@extends('base')
@section('title')
    Liste des Produits
@endsection

@section('content')
    <style>
        body {
            background-color: #eee
        }
        .t-products {
            background-image: linear-gradient(to right top, #13357b, #5625cb, #13357b, #551ae0, #13357b);
            color: #fff;
            border-radius: 3px
        }

        .processor {
            background-color: #fff;
            margin-top: 5px;
            border-bottom: 1px solid #eee
        }

        .brand {
            background-color: #fff;
            border-bottom: 1px solid #eee
        }

        .type {
            background-color: #fff
        }

        .product {
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            position: relative
        }

        .about span {
            color: #13357b;
            font-size: 16px
        }

        .cart-button button {
            font-size: 12px;
            color: #fff;
            background-color: #13357b;
            height: 38px
        }

        .cart-button button:focus,
        button:active {
            font-size: 12px;
            color: #fff;
            background-color: #13357b;
            box-shadow: none
        }

        .product_fav i {
            line-height: 40px;
            color: #13357b;
            font-size: 15px
        }

        .product_fav {
            display: inline-block;
            width: 36px;
            height: 39px;
            background: #FFFFFF;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
            border-radius: 11%;
            text-align: center;
            cursor: pointer;
            margin-left: 3px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        .product_fav:hover {
            background: #13357b
        }

        .product_fav:hover i {
            color: #fff
        }

        .about {
            margin-top: 12px
        }

        .off {
            position: absolute;
            left: 65%;
            top: 6%;
            width: 80px;
            text-align: center;
            height: 30px;
            line-height: 8px;
            border-radius: 5px;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff
        }
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
                    <div class="row g-4">
                        @foreach($produits->produit as $produit)
                            <div class="col-md-4">
                                <div class="product py-4">
                                    <span class="off bg-warning">- {{$produit->promotion}} %</span>
                                    <div class="text-center">
                                        <img src="{{asset(env('PRODUIT_ASSET').'/'.$produit->image_prod)}}" width="200">
                                    </div>
                                    <div class="about text-center">
                                        <h5>{{$produit->nom_produit}}</h5>
                                    </div>
                                    <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                                        <a class="btn btn-primary text-uppercase" href="{{route('showPorduct')}}?produit_id={{$produit->id}}&&token={{\Str::random(100)}}">
                                            <i class="fa fa-eye"></i> <b>Voir plus</b>
                                        </a>
                                        <div class="add">
                                            <span class="text-primary"><b>{{format_number($produit->prix)}}</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection
