<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function deleteRdv(ID){
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        $.ajax({
            type:'POST',
            url:"{{route('admin.deleterdv')}}",
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

    function deleteDemandeService(ID){
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        $.ajax({
            type:'POST',
            url:"{{route('admin.deletedemandeservice')}}",
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

    function deleteMessage(ID){
        var csrf_token=$('meta[name="csrf_token"]').attr('content');
        $.ajax({
            type:'POST',
            url:"{{route('admin.deleteMessage')}}",
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
