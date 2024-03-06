<script>
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $(document).ready(()=>{
        $('#NEWLETTER').click(function (e){
            e.preventDefault()
            $("#NEWLETTER").empty().append('<i class="fa fa-spinner fa-spin"></i> Connexion en cours...');
            $("#NEWLETTER").prop('disabled', false);
            var email = $('input[name="Email"]').val();
            var csrf_token=$('meta[name="csrf_token"]').attr('content');
            if(email.length ==""){
                $('.errorMessage').text('Désolé, ce champs sont réquis !!')
                $("#NEWLETTER").empty().append('<i class="fas fa-repeat"></i> Réessayer encore');
                $("#NEWLETTER").prop('disabled', false);
            }else{
                if (validateEmail(email)){
                    setTimeout(()=>{
                        $.ajax({
                            type:'POST',
                            url:"{{route('addNewLetter')}}",
                            data:{
                                email:email,
                                '_token' :csrf_token,
                            },
                            dataType: "json",
                            success:function(data){
                                console.log(data)
                                if (data.code == 200){
                                    $('.succesMessage').text('Fécilitation, merci pour votre abonnement')
                                    setTimeout(function (){
                                        window.location.reload()
                                    },4000);
                                }
                                if (data.code == 301){
                                    $('.errorMessage').text('Désolé, vous êtes déjà abonnés')
                                    $("#NEWLETTER").empty().append('<i class="fas fa-repeat"></i> Réessayer encore');
                                    $("#NEWLETTER").prop('disabled', false);
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
                    $('.errorMessage').text('Désolé, saisissez une bonne adresse e-mail !!')
                    $("#NEWLETTER").empty().append('<i class="fas fa-repeat"></i> Réessayer encore');
                    $("#NEWLETTER").prop('disabled', false);
                }

            }
        })
    })

    const validateEmail = (email) => {
        return email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };
</script>

