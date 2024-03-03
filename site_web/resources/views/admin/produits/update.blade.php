@extends('admin.template')

@section('title_admin')
    Admin / modifier produit
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{route('admin.produits')}}?token={{\Str::random(100)}}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Modifier produit <b style="color: blue"><i>{{$produits->nom_produit}}</i></b>    </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Modifier produit <b style="color: blue"><i>{{$produits->nom_produit}}</i></b></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Modifier produit <b style="color: blue"><i>{{$produits->nom_produit}}</i></b></h2>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label text-md-right"><b>Catégories : <i style="color: blue">({{$produits->categorie->category}})</i></b></label>
                                <select class="form-control selectric" name="categorie_id">
                                    <option selected value="{{$produits->categorie->id}}">{{$produits->categorie->category}}</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="hidden" value="{{$produits->id}}" name="produit_id">
                                <label class="col-form-label text-md-right"><b>Nom du produit</b></label>
                                <input type="text" class="form-control" placeholder="Nom du produit" name="nom_produit" value="{{$produits->nom_produit}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label text-md-right"><b>Prix du produit</b></label>
                                <input type="text" class="form-control" placeholder="Prix du produit" name="prix" value="{{$produits->prix}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label text-md-right"><b>Promotion</b></label>
                                <input type="number" class="form-control" placeholder="Promotion (ex: 20%)" name="promotion" value="{{$produits->promotion}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label text-md-right"><b>Quantité en stock</b></label>
                                <input type="number" class="form-control" placeholder="Quantité en stock" name="qty_stock" value="{{$produits->qty_stock}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="col-form-label text-md-right">
                                    <b>Image du produit</b>
                                </label>
                                <input type="file" class="form-control" name="image_prod" id="image_prod" value="{{$produits->image_prod}}">
                                <img alt="image" src="{{asset(env('PRODUIT_ASSET').'/'.$produits->image_prod)}}" class="rounded" width="90" data-toggle="tooltip" title="{{$produits->nom_produit}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-form-label text-md-right"><b>Description</b></label>
                                <div class="col-sm-12">
                                    <textarea class="summernote" placeholder="Détails du produit" name="description">{!! $produits->description !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-success btn-lg" id="UpdateProduits"><b>Enregistrer</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    @include('ajax.admin.produit')
@endpush
