@extends('admin.template')

@section('title_admin')
    Admin/dashboard
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><b>Clients satisfaits</b></h4>
                        </div>
                        <div class="card-body">{{$popularites->client_satisfaits}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fab fa-r-project"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><b>Projets réalisés</b></h4>
                        </div>
                        <div class="card-body">{{$popularites->projet_realises}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><b>Followers Facebook</b></h4>
                        </div>
                        <div class="card-body">{{$popularites->follower_acebook}}</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4><b>Abonnés Youtube</b></h4>
                        </div>
                        <div class="card-body">{{$popularites->abonne_youtube}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Les 12 dernières demande de services</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i> Voir plus</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Nom && Prénoms</th>
                                    <th>E-mail</th>
                                    <th>Téléphone</th>
                                    <th>Ville</th>
                                    <th>Date add</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($demandes as $produit)
                                    <tr>
                                        <td><b>{{$produit->nom.' '.$produit->prenoms}}</b></td>
                                        <td><b>{{$produit->email}}</b></td>
                                        <td><b>{{$produit->telephone}}</b></td>
                                        <td><b>{{$produit->ville}}</b></td>
                                        <td><b>{{dateToFrench($produit->created_at)}}</b></td>
                                        <td>
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
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Les dernières prises de RDV</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-primary"><i class="fa fa-eye"></i> Voir plus</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>Nom & Prénoms</th>
                                    <th>Type structure</th>
                                    <th>Nom structure</th>
                                    <th>E-mail</th>
                                    <th>Téléphone</th>
                                    <th>Date heure</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($prise_rdv as $row)
                                    <tr>
                                        <td>{{$row->fullName}}</td>
                                        <td>{{$row->type_entreprise}}</td>
                                        <td>{{$row->nom_structure}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row ->telephone}}</td>
                                        <td>{{dateToFrench($row->date_rdv).' '.$row->heure_rdv}}</td>
                                        <td>{!! $row->message !!}</td>
                                        <td>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Etes-vous sûr ?|Cette action peut être annulée. Voulez-vous continuer ?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
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
    </section>
@endsection
