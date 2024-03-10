@extends('admin.template')

@section('title_admin')
    Admin / ajouter produits
@endsection

@section('admin_content')
    <section class="section">
        <div class="section-header">
            <h1>Mettre à jour nos données</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Mettre à jour nos données</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Mettre à jour nos données</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label text-md-right"><b>Clients satisfaits</b></label>
                                <input type="number" class="form-control" value="{{$popularites->client_satisfaits}}" name="client_satisfaits">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label text-md-right"><b>Projets réalisés</b></label>
                                <input type="number" class="form-control" value="{{$popularites->projet_realises}}" name="projet_realises">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="hidden" value="{{$popularites->id}}" name="id">
                                <label class="col-form-label text-md-right"><b>Followers Facebook</b></label>
                                <input type="number" class="form-control" value="{{$popularites->follower_acebook}}" name="follower_acebook">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="col-form-label text-md-right"><b>Abonnés Youtube</b></label>
                                <input type="number" class="form-control" value="{{$popularites->abonne_youtube}}" name="abonne_youtube">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-success btn-lg" id="updateOpularity"><b>Mettre à jour</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function(){
            $('#updateOpularity').click(function (e){
                e.preventDefault()
                $("#updateOpularity").empty().append('<i class="fa fa-spinner fa-spin"></i> En cours d\'envoi...');
                $("#updateOpularity").prop('disabled', false);
                var client_satisfaits = $('input[name="client_satisfaits"]').val();
                var projet_realises = $('input[name="projet_realises"]').val();
                var follower_acebook = $('input[name="follower_acebook"]').val();
                var abonne_youtube = $('input[name="abonne_youtube"]').val();
                var id = $('input[name="id"]').val();

                var formData = new FormData();
                formData.append("client_satisfaits",client_satisfaits);
                formData.append("projet_realises",projet_realises);
                formData.append("follower_acebook",follower_acebook);
                formData.append("abonne_youtube",abonne_youtube);
                formData.append("id",id);
                $.ajax({
                    url: '{{route('admin.updatePopularity')}}',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:'json',
                    success: function(data) {
                        if (data.code == 200){
                            $('#modal_service').modal('hide')
                            $('#successModal').modal('show')
                            $('.succesMessage').text('Féliciation, opération effectuée avec succès')
                            setTimeout(function (){
                                window.location.reload()
                            },4000);
                        }
                    }
                });


            })

        })
    </script>

    <div class="modal fade" tabindex="-1" role="dialog" id="successModal">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div id="checkIcon">
                        <i class="text-success fa fa-check-circle" style="font-size: 40px"></i>
                    </div>
                    <div class="mt-4 py-2">
                        <b class="succesMessage"></b>
                    </div>
                    <div class="py-1"><button type="button" class="btn btn-sm btn-outline-success rounded-pill px-5" data-bs-dismiss="modal">OK</button></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="errorModal">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div id="checkIcon">
                        <i class="text-danger fa fa-exclamation-circle" style="font-size: 40px"></i>
                    </div>
                    <div class="mt-4 py-2">
                        <p class="px-4 pb-0 mb-1 text-secondary">Oops...</p>
                        <b class="errorMessage" style="color: red"></b>
                    </div>
                    <div class="py-1"><button type="button" class="btn btn-sm btn-danger rounded-pill px-5" data-bs-dismiss="modal">OK</button></div>
                </div>
            </div>
        </div>
    </div>

@endpush
