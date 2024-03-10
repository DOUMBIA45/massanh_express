<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="/" class=" d-flex align-items-center">
        <h1 class="m-0">
            <img class="img-fluid me-3" src="{{asset("assets/img/logo.png")}}" alt="" style="height: 90px;width: 140px"/>
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
            <a href="/" class="nav-item nav-link {{Route::current()->getName() == 'HomePage' ? 'active':'' }}">Accueil</a>
            <a href="{{route('services')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'services' ? 'active':'' }}">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{Route::current()->getName() == 'listeProduits' ? 'active':'' }}" data-bs-toggle="dropdown">Produits</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    @foreach($categories as $categorie)
                        <a href="{{route('listeProduits')}}?categorie_id={{$categorie->id}}&&token={{\Str::random(100)}}" class="dropdown-item">{{$categorie->category}}</a>
                    @endforeach
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{(Route::current()->getName() == 'actualite' || Route::current()->getName() =='travaux') ? 'active':'' }}" data-bs-toggle="dropdown">Actualités/Travaux</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="{{route('actualite')}}?token={{\Str::random(100)}}" class="dropdown-item">Actualité</a>
                    <a href="{{route('travaux')}}?token={{\Str::random(100)}}" class="dropdown-item">Travaux</a>
                </div>
            </div>
            <a href="{{route('galleries')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'galleries' ? 'active' : '' }}">Gallérie</a>

            <a href="{{route('about')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'about' ? 'active' : '' }}">A Propos</a>

            <a href="{{route('contact')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'contact' ? 'active':'' }}">Contact</a>
        </div>
    </div>
    <!--<a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>-->
</nav>
