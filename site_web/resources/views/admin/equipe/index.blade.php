@extends('admin.template')

@section('title_admin')
    Admin / équipes
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Equipe</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Equipe</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Equipe</h4>
                            <div class="card-header-form">
                                <a href="#" class="btn btn-primary modal_service p-2"><i class="fa fa-plus-circle"></i> Ajouter un membre</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Fonction</th>
                                        <th>Date Add</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($equipes as $equipe)
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup" name="id[]" value="{{$equipe->id}}" class="custom-control-input" id="checkbox-1">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <img alt="image" src="{{asset(env('EQUIPE_ASSET').'/'.$equipe->image)}}" class="rounded-circle" width="100" data-toggle="tooltip" title="{{$equipe->nom}}">
                                            </td>
                                            <td><b>{{$equipe->nom}}</b></td>
                                            <td class="align-middle">
                                                <b>{{$equipe->fonction}}</b>
                                            </td>
                                            <td><b>{{dateToFrench($equipe->created_at)}}</b></td>
                                            <td>
                                                <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Etes-vous sûr ?|Cette action peut être annulée. Voulez-vous continuer ?" data-confirm-yes="deleteEquipe({{$equipe->id}})"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
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
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un membre de l'éuquipe</h5>
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
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Nom et prénoms" name="nom">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Fonction</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Fonction" name="fonction">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger modal_close">Fermer</button>
                        <button type="submit" id="UploadServices" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


@push('script')
    <script>
        $(document).ready(function (){
            $('.modal_close').click((e)=>{
                e.preventDefault()
                $('#modal_service').modal('hide')
            })
        });
    </script>
    @include('ajax.admin.equipe')
@endpush
