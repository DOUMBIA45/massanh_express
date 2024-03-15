@extends('admin.template')

@section('title_admin')
    Admin/services
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Article</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Albums</div>
            </div>
        </div>
        <div class="section-body">
            <div class="card-body">
                <a href="#" class="btn btn-primary modal_ajouter_video p-2 float-right"><i class="fa fa-image"></i> Ajouter un album</a>
                <ul class="nav nav-pills" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true"><b>Nos albums photos</b></a>
                    </li>
                </ul>
                <div class="row">
                    @foreach($albums as $album)
                        <div class="col-3">
                            <div class="card card-statistic-1 mt-3">
                                <a href="{{route('admin.albums_photo')}}?album_id={{$album->id}}" style="text-decoration: none">
                                    <div class="card-icon bg-primary">
                                        <i class="fas fa-image"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4><b>{{$album->album}}</b></h4>
                                        </div>
                                        <div class="card-body">{{$album->photo->count()}}</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal_ajouter_photo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter une photo</h5>
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
                        <input type="hidden" name="type" value="photo">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger modal_close">Fermer</button>
                        <button type="submit" id="UploadPhoto" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_ajouter_video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un album</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Ajouter un album</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Titre de l'album" name="album">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger modal_close">Fermer</button>
                        <button type="submit" id="UploadVideo" class="btn btn-primary">Enregistrer</button>
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
                $('#modal_ajouter_photo').modal('hide')
            })

            $('.modal_close').click((e)=>{
                e.preventDefault()
                $('#modal_ajouter_video').modal('hide')
            })
        });
    </script>
    @include('ajax.admin.gallerie')
@endpush
