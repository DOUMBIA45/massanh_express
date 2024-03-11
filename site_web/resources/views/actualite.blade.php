@extends('base')
@section('title')
    Actualité
@endsection

@section('content')
    @include("layout.head_start")
    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Actualité</h5>
                <h1 class="mb-0">Liste de nos Actualités</h1>
            </div>
            <div class="row g-4">
                @foreach($actualites as $actualite)
                    <div class="col-md-3">
                        <div class="packages-item">
                            <div class="packages-img">
                                <img src="{{asset(env('ACTUALITE_ASSET').'/'.$actualite->image)}}" class="img-fluid w-100 rounded-top" alt="Image" style="height: 260px">
                            </div>
                            <div class="packages-content bg-light">
                                <div class="p-2 pb-0">
                                    <p class="mb-4">{!! substr($actualite->description,0,250) !!} ....</p>
                                </div>
                                <div class="row bg-primary rounded-bottom mx-0">
                                    <div class="col-6 text-start px-0">

                                    </div>
                                    <div class="col-6 text-end px-0">
                                        <button type="button" class="btn text-white py-2 px-4 modal_actualite{{$actualite->id}}">Voir plus</button>
                                    </div>
                                    <div class="modal fade" id="exampleModal{{$actualite->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><b>Détails d'actualité</b></h5>
                                                    <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! $actualite->description !!}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger close_modal{{$actualite->id}}" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Packages End -->
    @push("script")
        <script>
            $(document).ready(()=>{
                @foreach($actualites as $actualite)
                $('.modal_actualite{{$actualite->id}}').click(function (e){
                    e.preventDefault()
                    $('#exampleModal{{$actualite->id}}').modal('show')
                })

                $('.close_modal{{$actualite->id}}').click(function (e){
                    e.preventDefault()
                    $('#exampleModal{{$actualite->id}}').modal('hide')
                })
                @endforeach

            })
        </script>
    @endpush
@endsection

