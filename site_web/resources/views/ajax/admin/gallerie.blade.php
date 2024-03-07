<script>
    $(document).ready(()=>{
        $('.modal_ajouter_photo').click(function (e){
            e.preventDefault()
            $('#modal_ajouter_photo').modal('show')
        })

        $('.modal_ajouter_video').click(function (e){
            e.preventDefault()
            $('#modal_ajouter_video').modal('show')
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

        $('#UploadPhoto').click(function (e){
            e.preventDefault()
            $("#UploadPhoto").empty().append('<i class="fa fa-spinner fa-spin"></i> En cours d\'envoi...');
            $("#UploadPhoto").prop('disabled', false);
            var type = $('input[name="type"]').val();
            var image_empty = $('input[name="image"]').val();
            var image = $('#image')[0].files[0];

            if(image_empty.length ==''){
                $('#modal_ajouter_photo').modal('hide')
                $('#errorModal').modal('show')
                $('.errorMessage').text('Désolé, tous ce champs est réquis')
                $("#UploadPhoto").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                $("#UploadPhoto").prop('disabled', false);
            }else{
                if(image){
                    var image_name = image.name;
                    var image_extension = image_name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(image_extension, ['jpg', 'jpeg', 'png']) == -1) {
                        $('#merror_photo_extension').text('Fichier non autorisé, vuillez charger une bonne image(png,pjg ou jpeg)');
                        $("#UploadPhoto").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                        $("#UploadPhoto").prop('disabled', false);
                        return false;
                    }
                }
                var formData = new FormData();
                formData.append("type",type);
                formData.append("image",image);
                $.ajax({
                    url: '{{route('admin.storeGallerie')}}',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:'json',
                    success: function(data) {
                        if (data.code == 200){
                            $('#modal_ajouter_photo').modal('hide')
                            $('#successModal').modal('show')
                            $('.succesMessage').text('Opération effectuée avec succès')
                            setTimeout(function (){
                                window.location.reload()
                            },4000);
                        }

                        if (data.code == 301){
                            $('#modal_service').modal('hide')
                            $('#errorModal').modal('show')
                            $('.errorMessage').text('Désolé, cet nom existe déjà')
                            setTimeout(function (){
                                //window.location.reload()
                            },4000);
                        }
                    }
                });
            }

        })

        $('#UploadVideo').click(function (e){
            e.preventDefault()
            $("#UploadVideo").empty().append('<i class="fa fa-spinner fa-spin"></i> En cours d\'envoi...');
            $("#UploadVideo").prop('disabled', false);
            var link = $('input[name="link"]').val();
            var type = $('input[name="type"]').val();
            if(link.length ==''){
                $('#modal_ajouter_video').modal('hide')
                $('#errorModal').modal('show')
                $('.errorMessage').text('Désolé, tous ce champs est réquis')
                $("#UploadVideo").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                $("#UploadVideo").prop('disabled', false);
            }else{
                var formData = new FormData();
                formData.append("link",link);
                formData.append("type",type);
                $.ajax({
                    url: '{{route('admin.storeGallerieVideo')}}',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:'json',
                    success: function(data) {
                        if (data.code == 200){
                            $('#modal_ajouter_video').modal('hide')
                            $('#successModal').modal('show')
                            $('.succesMessage').text('Opération effectuée avec succès')
                            setTimeout(function (){
                                window.location.reload()
                            },4000);
                        }

                        if (data.code == 301){
                            $('#modal_service').modal('hide')
                            $('#errorModal').modal('show')
                            $('.errorMessage').text('Désolé, cet nom existe déjà')
                            setTimeout(function (){
                                //window.location.reload()
                            },4000);
                        }
                    }
                });
            }

        })
    })

    function deleteGallerie(ID){
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        $.ajax({
            type:'POST',
            url:"{{route('admin.deleteGalleries')}}",
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
