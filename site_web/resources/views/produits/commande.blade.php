@extends('base')
@section('title')
    commande produit
@endsection

@section('content')
    <style>
        img {
            max-width: 100%;
        }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px; } }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
            overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s; }

        .card {
            margin-top: 50px;
            background: #ffffff;
            padding: 3em;
            line-height: 1.5em; }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex; } }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column; }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1; }

        .product-title {
            margin-top: 0; }



        .add-to-cart, .like {
            background: #ff9f1a;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            -webkit-transition: background .3s ease;
            transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff; }

        .not-available {
            text-align: center;
            line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff; }

        .orange {
            background: #ff9f1a; }

        .green {
            background: #85ad00; }

        .blue {
            background: #0076ad; }

        .tooltip-inner {
            padding: 1.3em; }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3); }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1); } }

        /*# sourceMappingURL=style.css.map */
    </style>
    <div class="container-fluid">
        <div class="card">
            <div class="row">
                <div class="col-md-5">
                    <div class="wrapper">
                        <div class="preview">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="preview-pic tab-content">
                                        <div class="tab-pane active" id="pic-1">
                                            <img src="{{asset(env('PRODUIT_ASSET').'/'.$produits->image_prod)}}" height="300">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="product-title">{{$produits->nom_produit}}</h3>
                                    <div class="rating">
                                        <span class="review-no"><b>{{$produits->qty_stock}} en stock</b></span>
                                    </div>
                                    <h6>prix : <span>{{format_number($produits->prix)}}</span></h6>
                                    <h6>Sous total : <span>{{format_number($produits->prix *$_GET['qty'])}}</span></h6>
                                    <h6 style="color: red">Total à payer : <span>{{format_number($produits->prix *$_GET['qty'])}}</span></h6>
                                    <p class="product-description">
                                        {!! $produits->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wow fadeIn">
                    <hr>
                    <div class="bg-white rounded">
                        <form>
                            <div class="row g-3">
                                <input type="hidden" name="qty" value="{{$_GET['qty']}}">
                                <input type="hidden" name="produit_id" value="{{$produits->id}}">
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
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit" id="Commande"><b>Passer la commande</b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    @include('ajax.commande')
@endpush
