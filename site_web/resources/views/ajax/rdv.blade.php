<script>
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $(document).ready(()=>{
        $('#RDV').click(function (e){
            e.preventDefault()
            $("#RDV").empty().append('<i class="fa fa-spinner fa-spin"></i> Connexion en cours...');
            $("#RDV").prop('disabled', false);
            var fullName = $('input[name="fullName"]').val();
            var type_entreprise = $('select[name="type_entreprise"]').val();
            var email = $('input[name="email"]').val();
            var telephone = $('input[name="telephone"]').val();
            var date_rdv = $('input[name="date_rdv"]').val();
            var heure_rdv = $('input[name="heure_rdv"]').val();
            var message = $('textarea[name="message"]').val();
            var csrf_token=$('meta[name="csrf_token"]').attr('content');
            if(fullName.length =="" || type_entreprise =="A"  ||
                email.length =="" || telephone.length =="" ||
                date_rdv.length=='' || heure_rdv.length == '' || message.length ==''){
                $('#errorModal').modal('show')
                $('.errorMessage').text('Désolé, ces champs sont réquis!!')
                $("#RDV").empty().append('<i class="fas fa-repeat"></i> Réessayer encore');
                $("#RDV").prop('disabled', false);
            }else{
                if(validateEmail(email)){
                    setTimeout(()=>{
                        $.ajax({
                            type:'POST',
                            url:"{{route('addRdv')}}",
                            data:{
                                fullName:fullName,
                                type_entreprise:type_entreprise,
                                email:email,
                                telephone:telephone,
                                date_rdv:date_rdv,
                                heure_rdv:heure_rdv,
                                message:message,
                                '_token' :csrf_token,
                            },
                            dataType: "json",
                            success:function(data){
                                console.log(data)
                                if (data.code == 200){
                                    $('#successModal').modal('show')
                                    $('.succesMessage').text('Fécilitation '+fullName+', votre prise de rdv  a été soumis avec succès')
                                    setTimeout(function (){
                                        window.location.reload()
                                    },2000);
                                }
                                if (data.code == 301){
                                    $('#errorModal').modal('show')
                                    $('.errorMessage').text('Désolé, '+fullName+' vous avez déjà un rdv prévu le '+date_rdv)
                                    $("#RDV").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                                    $("#RDV").prop('disabled', false);
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
                    $("#RDV").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                    $("#RDV").prop('disabled', false);
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
