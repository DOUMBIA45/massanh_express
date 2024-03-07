@extends('admin.template')

@section('title_admin')
    Admin/services
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Mettre à jour la page à propos</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Mettre à jour la page à propos</div>
            </div>
        </div>
        <div class="section-body">
            <form>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card-body">
                            <div class="chocolat-parent">
                                <a href="{{asset('assets/img/'.$aprpos->logo)}}" class="chocolat-image" title="Just an example">
                                    <div data-crop-image="285">
                                        <img alt="image" src="{{asset('assets/img/'.$aprpos->logo)}}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                            <input type="file" class="form-control" name="c" id="logo">
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label><b>PRÉSENTATION DE MASSANANH EXPERTIZ</b></label>
                                        <textarea class="form-control summernote-simple" name="presenation_massanh">
                                             {!! $aprpos->presenation_massanh !!}
                                        </textarea>
                                    </div>
                                    <input type="hidden" name="id" value="{{$aprpos->id}}">
                                    <div class="form-group col-12">
                                        <label><b>NOS PRESTATIONS</b></label>
                                        <textarea class="form-control summernote-simple" name="prestation">
                                             {!! $aprpos->prestation !!}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label><b>NOTRE FORCE</b></label>
                                        <textarea class="form-control summernote-simple" name="notre_forces">
                                             {!! $aprpos->notre_forces !!}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label><b>NOTRE VISION</b></label>
                                        <textarea class="form-control summernote-simple" name="notre_vision">
                                             {!! $aprpos->notre_vision !!}
                                        </textarea>
                                    </div>
                                    <div class="form-group col-12">
                                        <label><b>LOCALISATION ET CONTACT</b></label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Abidjan:</h5>
                                                <textarea class="form-control summernote-simple" name="adresse_ci">
                                                    {!! $aprpos->adresse_ci !!}
                                                </textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Burkina Faso:</h5>
                                                <textarea class="form-control summernote-simple" name="adresse_bf">
                                                    {!! $aprpos->adresse_bf !!}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" id="UpdateApropos" class="btn btn-success">Modifier</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('script')
    @include('ajax.admin.apropos')
@endpush
