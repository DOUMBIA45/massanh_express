@extends('admin.template')

@section('title_admin')
    Admin / details produits
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Détails produit</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Détails produit</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{asset(env('PRODUIT_ASSET').'/'.$produits->image_prod)}}" class="profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Prix</div>
                                    <div class="profile-widget-item-value">{{format_number($produits->prix)}}</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Promotion</div>
                                    <div class="profile-widget-item-value">{{$produits->promotion}} <i style="color: red">%</i></div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Qty stock</div>
                                    <div class="profile-widget-item-value">{{$produits->qty_stock}}</div>
                                </div>
                            </div>
                            <div class="profile-widget-description">
                                <div class="profile-widget-name text-center">{{$produits->nom_produit}}</div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Description du produit</label>
                                        <textarea class="form-control summernote-simple">
                                           {!! $produits->description !!}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
