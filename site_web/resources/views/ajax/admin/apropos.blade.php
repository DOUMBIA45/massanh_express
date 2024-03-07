<script>
    $(document).ready(()=>{
        $('.modal_service').click(function (e){
            $('#modal_service').modal('show')
        })
    })
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){
        $('#UpdateApropos').click(function (e){
            e.preventDefault()
            $("#UpdateApropos").empty().append('<i class="fa fa-spinner fa-spin"></i> En cours d\'envoi...');
            $("#UpdateApropos").prop('disabled', false);
            var id = $('input[name="id"]').val();
            var presenation_massanh = $('textarea[name="presenation_massanh"]').val();
            var prestation = $('textarea[name="prestation"]').val();
            var notre_forces = $('textarea[name="notre_forces"]').val();
            var notre_vision = $('textarea[name="notre_vision"]').val();
            var adresse_ci = $('textarea[name="adresse_ci"]').val();
            var adresse_bf = $('textarea[name="adresse_bf"]').val();
            var logo = $('#logo')[0].files[0];

            if(logo){
                var image_name = logo.name;
                var image_extension = image_name.split('.').pop().toLowerCase();
                if (jQuery.inArray(image_extension, ['jpg', 'jpeg', 'png']) == -1) {
                    $('#merror_photo_extension').text('Fichier non autorisé, vuillez charger une bonne image(png,pjg ou jpeg)');
                    $("#UploadProduits").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                    $("#UploadProduits").prop('disabled', false);
                    return false;
                }
            }
            var formData = new FormData();
            formData.append("id",id);
            formData.append("presenation_massanh",presenation_massanh);
            formData.append("prestation",prestation);
            formData.append("notre_forces",notre_forces);
            formData.append("notre_vision",notre_vision);
            formData.append("adresse_ci",adresse_ci);
            formData.append("adresse_bf",adresse_bf);
            formData.append("logo",logo);
            $.ajax({
                url: '{{route('admin.updateApropos')}}',
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
