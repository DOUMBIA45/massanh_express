@extends('admin.template')

@section('title_admin')
    Admin/dashboard
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Témoignage</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Témoignage</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Témoignage</h4>
                            <div class="card-header-form">
                                <a href="#" class="btn btn-primary modal_temoignage p-2"><i class="fa fa-plus-circle"></i> Ajouter un témoignage</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-2">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>fonction</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($temoignages as $temoignage)
                                        <tr>
                                            <td class="p-2">
                                                <img alt="image" src="{{asset(env('TEMOIGNAGE_ASSET').'/'.$temoignage->photo)}}" class="rounded" width="100" data-toggle="tooltip" title="{{$temoignage->nom}}">
                                            </td>
                                            <td><b>{{$temoignage->nom}}</b></td>
                                            <td><b>{!! $temoignage->description !!}</b></td>
                                            <td>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Supprimer produit" data-confirm="Etes-vous sûr ?|Cette action peut être annulée. Voulez-vous continuer ?" data-confirm-yes="deleteTemoignages({{$temoignage->id}})"><i class="fas fa-trash"></i></a>
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

    <div class="modal fade" id="modal_temoignage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un parténaire</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Image</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-file"></i>
                                    </div>
                                </div>
                                <input type="file" class="form-control" placeholder="Email" name="image" id="image">
                                <b id="merror_photo_extension" style="color: red"></b>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nom</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Nom" name="nom">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Commentaire</label>
                            <div class="input-group">
                                <textarea class="summernote" placeholder="Commentaire" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" id="AddTemoignages" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('script')
    @include('ajax.admin.temoignage')
@endpush