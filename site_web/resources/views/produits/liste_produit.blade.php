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
    @include("layout.head_start")
    <div class="container">
        <div class="container-fluid mt-5 mb-5">
            <div class="row g-2">
                <div class="col-md-3">
                    <div class="processor p-2">
                        <div class="heading d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase">Nos catégories</h6> <span>--</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckDefault"><b>Equipements médicaux</b></label>
                            </div> <span>3</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckChecked"> <b>Gaz et Fluids médicaux</b></label>
                            </div>
                            <span>4</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckChecked"> <b>Traitement des déchets</b> </label>
                            </div>
                            <span>14</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="product py-4">
                                <span class="off bg-success">-25% OFF</span>
                                <div class="text-center">
                                    <img src="assets/img/t1.jpg" width="200">
                                </div>
                                <div class="about text-center">
                                    <h5>XRD Active Shoes</h5>
                                </div>
                                <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary text-uppercase">
                                        <i class="fa fa-shopping-cart"></i> <b>Acheter</b>
                                    </button>
                                    <div class="add">
                                        <span class="text-primary"><b>$1,999.99</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product py-4">
                                <span class="off bg-success">-25% OFF</span>
                                <div class="text-center">
                                    <img src="assets/img/t2.jpg" width="200">
                                </div>
                                <div class="about text-center">
                                    <h5>XRD Active Shoes</h5>
                                </div>
                                <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary text-uppercase">
                                        <i class="fa fa-shopping-cart"></i> <b>Acheter</b>
                                    </button>
                                    <div class="add">
                                        <span class="text-primary"><b>$1,999.99</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product py-4">
                                <span class="off bg-success">-25% OFF</span>
                                <div class="text-center">
                                    <img src="assets/img/t1.jpg" width="200">
                                </div>
                                <div class="about text-center">
                                    <h5>XRD Active Shoes</h5>
                                </div>
                                <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary text-uppercase">
                                        <i class="fa fa-shopping-cart"></i> <b>Acheter</b>
                                    </button>
                                    <div class="add">
                                        <span class="text-primary"><b>$1,999.99</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product py-4">
                                <span class="off bg-success">-25% OFF</span>
                                <div class="text-center">
                                    <img src="{{asset('assets/img/t2.jpg')}}" width="200">
                                </div>
                                <div class="about text-center">
                                    <h5>XRD Active Shoes</h5>
                                </div>
                                <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary text-uppercase">
                                        <i class="fa fa-shopping-cart"></i> <b>Acheter</b>
                                    </button>
                                    <div class="add">
                                        <span class="text-primary"><b>$1,999.99</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product py-4">
                                <span class="off bg-success">-25% OFF</span>
                                <div class="text-center">
                                    <img src="{{asset('assets/img/t1.jpg')}}" width="200">
                                </div>
                                <div class="about text-center">
                                    <h5>XRD Active Shoes</h5>
                                </div>
                                <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary text-uppercase">
                                        <i class="fa fa-shopping-cart"></i> <b>Acheter</b>
                                    </button>
                                    <div class="add">
                                        <span class="text-primary"><b>$1,999.99</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product py-4">
                                <span class="off bg-success">-25% OFF</span>
                                <div class="text-center">
                                    <img src="assets/img/t2.jpg" width="200">
                                </div>
                                <div class="about text-center">
                                    <h5>XRD Active Shoes</h5>
                                </div>
                                <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary text-uppercase">
                                        <i class="fa fa-shopping-cart"></i> <b>Acheter</b>
                                    </button>
                                    <div class="add">
                                        <span class="text-primary"><b>$1,999.99</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection
