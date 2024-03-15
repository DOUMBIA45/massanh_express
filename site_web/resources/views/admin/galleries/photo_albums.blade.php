@extends('admin.template')

@section('title_admin')
    Admin/services
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Album {{$albums->album}}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">{{$albums->album}}</div>
            </div>
        </div>
        <div class="section-body">
            <div class="card-body">
                <a href="#" class="btn btn-primary modal_ajouter_photo p-2 float-right"><i class="fa fa-image"></i> Ajouter une photo</a>
                <ul class="nav nav-pills" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true"><b>Nos photos</b></a>
                    </li>
                </ul>
                <div class="row">
                    @foreach($galleries->where('type','=','photo') as $photo)
                        <div class="col-12 col-md-3 col-lg-3 mt-3">
                            <div class="card article article-style-b">
                                <img src="{{asset('assets/img/galleries/'.$photo->media)}}" style="height: 16rem">
                                <div class="article-badge">
                                    <div class="article-badge-item">
                                        <a class="btn btn-danger float-right text-white" data-confirm="Etes-vous sûr ?|Cette action peut être annulée. Voulez-vous continuer ?" data-confirm-yes="deleteGallerie({{$photo->id}})"><i class="fas fa-trash"></i></a>
                                    </div>
                                </div>
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
                                <input type="hidden" name="album_id" value="{{$albums->id}}">
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
