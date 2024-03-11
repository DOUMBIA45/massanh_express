@extends('base')
@section('title')
    Les services
@endsection

@section('content')
    @include('layout.head_start')
    <!-- Packages Start -->
    <div class="container-fluid packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Nos travaux</h5>
                <h1 class="mb-0">Nos travaux</h1>
            </div>
            <div class="row g-4">
                @foreach($realisations as $realisation)
                    <div class="col-md-3">
                        <div class="packages-item">
                            <div class="packages-img">
                                <img src="{{asset(env('ACTUALITE_ASSET').'/'.$realisation->image)}}" class="img-fluid w-100 rounded-top" alt="Image" style="height: 260px">
                            </div>
                            <div class="packages-content bg-light">
                                <div class="p-4 pb-0">
                                    <p class="mb-4">{!! $realisation->description !!}</p>
                                </div>
                                <div class="row bg-primary rounded-bottom mx-0">
                                    <div class="col-6 text-start px-0">

                                    </div>
                                    <div class="col-6 text-end px-0">
                                        <button type="button" class="btn text-white py-2 px-4 modal_actualite{{$realisation->id}}">Voir plus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal{{$realisation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Détails</b></h5>
                                    <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! $realisation->description !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger close_modal{{$realisation->id}}" data-dismiss="modal"><i class="fa fa-close"></i> Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    @push("script")
        <script>
            $(document).ready(()=>{
                @foreach($realisations as $realisation)
                $('.modal_actualite{{$realisation->id}}').click(function (e){
                    e.preventDefault()
                    $('#exampleModal{{$realisation->id}}').modal('show')
                })
                $('.close_modal{{$realisation->id}}').click(function (e){
                    e.preventDefault()
                    $('#exampleModal{{$realisation->id}}').modal('hide')
                })
                @endforeach


            })
        </script>
    @endpush
    <!-- Packages End -->
@endsection
