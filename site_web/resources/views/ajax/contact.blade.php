<script>
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $(document).ready(()=>{
        $('#AddContact').click(function (e){
            e.preventDefault()
            $("#AddContact").empty().append('<i class="fa fa-spinner fa-spin"></i> Connexion en cours...');
            $("#AddContact").prop('disabled', false);
            var fullName = $('input[name="fullName"]').val();
            var email = $('input[name="email"]').val();
            var sujet = $('input[name="sujet"]').val();
            var message = $('textarea[name="message"]').val();
            var csrf_token=$('meta[name="csrf_token"]').attr('content');
            if(fullName.length =="" || email.length =="" || sujet.length =="" || message.length ==''){
                $('#errorModal').modal('show')
                $('.errorMessage').text('Désolé, ces champs sont réquis!!')
                $("#AddContact").empty().append('<i class="fas fa-repeat"></i> Réessayer encore');
                $("#AddContact").prop('disabled', false);
            }else{
                if(validateEmail(email)){
                    setTimeout(()=>{
                        $.ajax({
                            type:'POST',
                            url:"{{route('addContact')}}",
                            data:{
                                fullName:fullName,
                                email:email,
                                sujet:sujet,
                                message:message,
                                '_token' :csrf_token,
                            },
                            dataType: "json",
                            success:function(data){
                                console.log(data)
                                if (data.code == 200){
                                    $('#successModal').modal('show')
                                    $('.succesMessage').text('Fécilitation '+fullName+', votre message a été soumis avec succès')
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
                    },3000)
                }else{
                    $('#errorModal').modal('show')
                    $('.errorMessage').text('Désolé, veuillez saisir une bonne adresse mail ')
                    $("#AddContact").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                    $("#AddContact").prop('disabled', false);
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