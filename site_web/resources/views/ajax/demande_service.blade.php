<script>
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $(document).ready(()=>{
        $('#DemanderService').click(function (e){
            e.preventDefault()
            $("#DemanderService").empty().append("<i class='fa fa-spinner fa-spin'></i> Demande en cours d'envoi.....");
            $("#DemanderService").prop('disabled', false);
            var service_id = $('input[name="service_id"]').val();
            var nom = $('input[name="nom"]').val();
            var prenoms = $('input[name="prenoms"]').val();
            var email = $('input[name="email"]').val();
            var telephone = $('input[name="telephone"]').val();
            var ville = $('input[name="ville"]').val();
            var adresse = $('input[name="adresse"]').val();
            var description = $('textarea[name="description"]').val();
            var csrf_token=$('meta[name="csrf_token"]').attr('content');
            if(nom.length =="" || prenoms.length ==""  ||
                email.length =="" || telephone.length =="" ||
                ville.length=='' || adresse.length == '' || description.length ==''){
                $('#errorModal').modal('show')
                $('.errorMessage').text('Désolé, ces champs sont réquis!!')
                $("#DemanderService").empty().append('<i class="fas fa-repeat"></i> Réessayer encore');
                $("#DemanderService").prop('disabled', false);
            }else{
                if(validateEmail(email)){
                    setTimeout(()=>{
                        $.ajax({
                            type:'POST',
                            url:"{{route('storeDemandeService')}}",
                            data:{
                                service_id:service_id,
                                nom:nom,
                                prenoms:prenoms,
                                email:email,
                                telephone:telephone,
                                ville:ville,
                                adresse:adresse,
                                description:description,
                                '_token' :csrf_token,
                            },
                            dataType: "json",
                            success:function(data){
                                console.log(data)
                                if (data.code == 200){
                                    $('#successModal').modal('show')
                                    $('.succesMessage').text('Fécilitation '+nom+', votre demande a été soumise avec succès, nous vous contacterons')
                                    setTimeout(function (){
                                        window.location.reload()
                                    },5000);
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
                    },3000)
                }else{
                    $('#errorModal').modal('show')
                    $('.errorMessage').text('Désolé, veuillez saisir une bonne adresse mail ')
                    $("#DemanderService").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                    $("#DemanderService").prop('disabled', false);
                }
            }
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
