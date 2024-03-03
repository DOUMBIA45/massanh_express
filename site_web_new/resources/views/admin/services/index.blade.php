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
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="#" class="font-weight-600"><img src="{{asset('asset_admin/img/avatar/avatar-1.png')}}" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                                    </td>
                                    <td>
                                       fdgfd
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="voir"><i class="fas fa-eye"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
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
                                <textarea type="text" class="summernote-simple" placeholder="Description" name="description"></textarea>
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
