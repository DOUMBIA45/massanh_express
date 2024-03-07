@extends('admin.template')

@section('title_admin')
    Admin/services
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Contact</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Contact</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Contact</h4>
                            <div class="card-header-form"></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>
                                        <th>Nom && Prénoms</th>
                                        <th>E-mail</th>
                                        <th>Sujet</th>
                                        <th>Message</th>
                                        <th>Date add</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td><b>{{$contact->fullName}}</b></td>
                                            <td><b>{{$contact->email}}</b></td>
                                            <td><b>{{$contact->sujet}}</b></td>
                                            <td><b>{{$contact->message}}</b></td>
                                            <td><b>{{dateToFrench($contact->created_at)}}</b></td>
                                            <td>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Supprimer produit" data-confirm="Etes-vous sûr ?|Cette action peut être annulée. Voulez-vous continuer ?" data-confirm-yes="deleteProduit({{$contact->id}})"><i class="fas fa-trash"></i></a>
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
