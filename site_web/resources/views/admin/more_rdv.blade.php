@extends('admin.template')

@section('title_admin')
    Admin/dashboard
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Voir plus de rdv</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Voir plus de rdv</a></div>
                <div class="breadcrumb-item">Voir plus de rdv</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Voir plus de rdv</h4>
                            <div class="card-header-form"></div>
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
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Etes-vous sûr ?|Cette action peut être annulée. Voulez-vous continuer ?" data-confirm-yes="deleteRdv({{$row->id}})"><i class="fas fa-trash"></i></a>
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
    @include('ajax.admin.admin')
@endpush
