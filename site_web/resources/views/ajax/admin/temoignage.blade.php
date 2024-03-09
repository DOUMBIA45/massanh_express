<script>
    $(document).ready(()=>{
        $('.modal_temoignage').click(function (e){
            e.preventDefault()
            $('#modal_temoignage').modal('show')
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
        $('#AddTemoignages').click(function (e){
            e.preventDefault()
            $("#AddTemoignages").empty().append('<i class="fa fa-spinner fa-spin"></i> En cours d\'envoi...');
            $("#AddTemoignages").prop('disabled', false);
            var nom = $('input[name="nom"]').val();
            var image_empty = $('input[name="image"]').val();
            var description = $('textarea[name="description"]').val();
            var image = $('#image')[0].files[0];

            if(nom.length == '' || image_empty.length =='' || description.length ==''){
                $('#modal_temoignage').modal('hide')
                $('#errorModal').modal('show')
                $('.errorMessage').text('Désolé, tous ces champs sont réquis')
                $("#AddTemoignages").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                $("#AddTemoignages").prop('disabled', false);
            }else{
                if(image){
                    var image_name = image.name;
                    var image_extension = image_name.split('.').pop().toLowerCase();
                    if (jQuery.inArray(image_extension, ['jpg', 'jpeg', 'png']) == -1) {
                        $('#merror_photo_extension').text('Fichier non autorisé, vuillez charger une bonne image(png,pjg ou jpeg)');
                        $("#AddTemoignages").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                        $("#AddTemoignages").prop('disabled', false);
                        return false;
                    }
                }
                var formData = new FormData();
                formData.append("nom",nom);
                formData.append("image",image);
                formData.append("description",description);
                $.ajax({
                    url: '{{route('admin.storeTemoignages')}}',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:'json',
                    success: function(data) {
                        if (data.code == 200){
                            $('#modal_temoignage').modal('hide')
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

    function deleteTemoignages(ID){
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        $.ajax({
            type:'POST',
            url:"{{route('admin.deleteTemoignages')}}",
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
