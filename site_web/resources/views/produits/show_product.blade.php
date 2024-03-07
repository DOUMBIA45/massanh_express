@extends('base')
@section('title')
    Liste des Produits
@endsection

@section('content')
    <style>

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

        .product-title, .price, .sizes, .colors {
            text-transform: UPPERCASE;
            font-weight: bold; }



        .product-title, .rating, .product-description, .price {
            margin-bottom: 15px; }

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
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1">
                                <img src="{{asset(env('PRODUIT_ASSET').'/'.$produits->image_prod)}}" height="460">
                            </div>
                        </div>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$produits->nom_produit}}</h3>
                        <div class="rating">
                            <span class="review-no"><b>{{$produits->qty_stock}} en stock</b></span>
                        </div>
                        <h4 class="price">prix du produit: <span>{{format_number($produits->prix)}}</span></h4>
                        <p class="product-description">
                            {!! $produits->description !!}
                        </p>
                        <form>
                            <br><br><br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Quantité du produit</label>
                                    <select class="form-control" name="qty">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="action">
                                <button id="form" class="add-to-cart  form-control btn btn-default bg-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    <b style="color: white">Acheter</b>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $('#form').click((e)=>{
            e.preventDefault()
            var qty = $('select[name="qty"]').val();
            $("#form").empty().append('<i class="fa fa-spinner fa-spin"></i> Patientez svp...');
            $("#form").prop('disabled', false);
            setTimeout(()=>{
                window.location.assign('{{route('commandeProduits')}}?produit_id={{$produits->id}}&&token={{\Str::random(100)}}&&qty='+qty+'')
            },2000)
        })
    </script>
@endpush
