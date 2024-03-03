<script>
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $(document).ready(()=>{

        $('#login').click(function (e){
            e.preventDefault()
            $("#login").empty().append('<i class="fa fa-spinner fa-spin"></i> Connexion en cours...');
            $("#login").prop('disabled', false);

            var email = $('input[name="email"]').val();
            var password = $('input[name="password"]').val();
            var csrf_token=$('meta[name="csrf_token"]').attr('content');
            if(email.length =="" || password.length ==""){
                swal('Oops ....', 'Tous ces champs sont réquis!!', 'error');
                $("#login").empty().append('<i class="fas fa-repeat"></i> Réessayer encore');
                $("#login").prop('disabled', false);
            }else{
                setTimeout(()=>{
                    $.ajax({
                        type:'POST',
                        url:"{{route('authLogin')}}",
                        data:{
                            email:email,
                            password:password,
                            '_token' :csrf_token,
                        },
                        dataType: "json",
                        success:function(data){
                            console.log(data)
                            if (data.code == 200){
                                swal('Connexion reussie !', 'rédirection en cours ......', 'success');
                                setTimeout(function (){
                                    window.location = data.redirect
                                },2000);
                            }
                            if (data.code == 303){
                                swal('Erreur de connexion !!!', 'Verifiez votre adresse ou mot de passe.', 'error');
                                $("#login").empty().append('<i class="fa fa-repeat"></i> Réessayer encore');
                                $("#login").prop('disabled', false);
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
            }
        })
    })
</script>
