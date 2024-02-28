@if(Route::current()->getName() == 'HomePage')
    <div class="carousel-header">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{asset('assets/img/baniere1.jpg')}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">

                            <h1 class="display-2 text-capitalize text-white mb-4"> Construction de l'hôpital Général de Ferkessedougou</h1>
                            <div class="d-flex align-items-center justify-content-center">

                            </div>
                        </div>
                    </div>
                </div >
                <div class="carousel-item">
                    <img src="{{asset('assets/img/baniere2.jpg')}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-2 text-capitalize text-white mb-4">Installation au CHR de San Pedro</h1>
                            <div class="d-flex align-items-center justify-content-center">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/img/baniere3.jpg')}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-2 text-capitalize text-white mb-4">Maintenance préventive </h1>
                            <div class="d-flex align-items-center justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@else
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px">
            <h1 class="text-white display-3 mb-4">{{$title}}</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item active text-white">{{$title}}</li>
            </ol>
        </div>
    </div>
@endif


