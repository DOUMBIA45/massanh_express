@extends('admin.template')

@section('title_admin')
    Admin/services
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Nos services</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-primary modal_service"><i class="fa fa-eye"></i> Ajouter un nouveau service</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Service</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td class="p-2">
                                            @if($service->images)
                                                <a href="#">
                                                    <img src="{{asset(env('SERVICES_ASSET').'/'.$service->images)}}" alt="avatar" width="80" class="rounded mr-1">
                                                </a>
                                            @else
                                                <a href="#">
                                                    <img src="{{asset(env('SERVICES_ASSET').'/services.png')}}" alt="avatar" width="80" class="rounded mr-1">
                                                </a>
                                            @endif
                                        </td>
                                        <td><b>{{$service->titre}}</b></td>
                                        <td>{!! $service->description !!}</td>
                                        <td>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Etes-vous sûr ?|Cette action peut être annulée. Voulez-vous continuer ?" data-confirm-yes="deleteService({{$service->id}})"><i class="fas fa-trash"></i></a>
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

    <div class="modal fade" id="modal_service" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un nouveau service</h5>
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
                        <label>Titre</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-teeth"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Titre" name="titre">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label>Titre</label>
                            <div class="input-group">
                                <textarea type="text" class="summernote" placeholder="Description" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" id="UploadServices" class="btn btn-primary">Enregistrer</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('script')
    @include('ajax.admin.service')
@endpush
