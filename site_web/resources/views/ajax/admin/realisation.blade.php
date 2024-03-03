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
        $('#UploadServices').click(function (e){
            e.preventDefault()
            $("#UploadServices").empty().append('<i class="fa fa-spinner fa-spin"></i> En cours d\'envoi...');
            $("#UploadServices").prop('disabled', false);
            var description = $('textarea[name="description"]').val();
            var image = $('#image')[0].files[0];

            if(description.length == ''){
                $('#modal_service').modal('hide')
                $('#errorModal').modal('show')
                $('.errorMessage').text('Désolé, tous ces champs sont réquis')
                $("#UploadServices").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                $("#UploadServices").prop('disabled', false);
            }else{
                if(image){
                    var image_name = image.name;
                    var image_extension = image_name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(image_extension, ['jpg', 'jpeg', 'png']) == -1) {
                        $('#merror_photo_extension').text('Fichier non autorisé, vuillez charger une bonne image(png,pjg ou jpeg)');
                        $("#UploadServices").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                        $("#UploadServices").prop('disabled', false);
                        return false;
                    }
                }
                var formData = new FormData();
                formData.append("description",description);
                formData.append("image",image);
                $.ajax({
                    url: '{{route('admin.store_realisation')}}',
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
            }

        })
    })

    function deleteRealisation(ID){
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        $.ajax({
            type:'POST',
            url:"{{route('admin.delete_realisation')}}",
            data:{
                ID:ID,
                '_token' :csrf_token,
            },
            dataType: "json",
            success:function(data){
                console.log(data)
                if (data.code == 200){
                    swal('Opération effectuée!', 'rédirection en cours ......', 'success');
                    setTimeout(function (){
                        window.location.reload()
                    },2000);
                }
            },
            error:function (){
                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ces champs sont requs',
                })
            },
        });
    }

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
