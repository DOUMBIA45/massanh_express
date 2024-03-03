@extends('admin.template')

@section('title_admin')
    Admin / produits
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Produits</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Produits</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Produits</h4>
                            <div class="card-header-form">
                                <a href="{{route('admin.add_produits')}}?token={{\Str::random(100)}}" class="btn btn-primary modal_service p-2"><i class="fa fa-plus-circle"></i> Ajouter produits</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Produit</th>
                                        <th>Categorie</th>
                                        <th>Nom produit</th>
                                        <th>Prix</th>
                                        <th>Promotion</th>
                                        <th>Qty stock</th>
                                        <th>Date add</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($produits as $produit)
                                        <tr>
                                            <td>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" value="{{$produit->id}}">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <img alt="image" src="{{asset(env('PRODUIT_ASSET').'/'.$produit->image_prod)}}" class="rounded" width="100" data-toggle="tooltip" title="{{$produit->nom_produit}}">
                                            </td>
                                            <td><b>${{$produit->categorie->category}}</b></td>
                                            <td>
                                                <b>{{$produit->nom_produit}}</b>
                                            </td>
                                            <td>
                                                <b>{{format_number($produit->prix)}}</b>
                                            </td>
                                            <td><b>{{$produit->promotion}} <i style="color: red">%</i></b></td>
                                            <td><b>{{$produit->qty_stock}}</b></td>
                                            <td><b>{{dateToFrench($produit->created_at)}}</b></td>
                                            <td>
                                                <a href="{{route('admin.show_produits')}}?produit_id={{$produit->id}}&&token={{\Str::random(100)}}" class="btn btn-primary btn-action" data-toggle="tooltip" title="voir produit"><i class="fas fa-eye"></i></a>
                                                <a href="{{route('admin.update_produits')}}?produit_id={{$produit->id}}&&token={{\Str::random(100)}}" class="btn btn-success btn-action" data-toggle="tooltip" title="Modifier produit"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Supprimer produit" data-confirm="Etes-vous sûr ?|Cette action peut être annulée. Voulez-vous continuer ?" data-confirm-yes="deleteProduit({{$produit->id}})"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
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
