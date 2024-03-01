<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="/" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">
            <img class="img-fluid me-3" src="{{asset("assets/img/logo.png")}}" alt=""/>
        </h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
            <a href="/" class="nav-item nav-link {{Route::current()->getName() == 'HomePage' ? 'active':'' }}">Accueil</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{Route::current()->getName() == 'listeProduits' ? 'active':'' }}" data-bs-toggle="dropdown">Produits</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="{{route('listeProduits')}}?token={{\Str::random(100)}}" class="dropdown-item">Equipements médicaux</a>
                    <a href="{{route('listeProduits')}}?token={{\Str::random(100)}}" class="dropdown-item">Gaz et Fluids médicaux</a>
                    <a href="{{route('listeProduits')}}?token={{\Str::random(100)}}" class="dropdown-item">Traitement des déchets</a>
                </div>
            </div>
            <a href="{{route('actualite')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'actualite' ? 'active':'' }}">Actualité</a>
            <a href="{{route('equipe')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'equipe' ? 'active':'' }}">Equipe</a>
            <a href="{{route('equipe')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'equipe' ? 'active':'' }}">Travaux</a>
            <a href="{{route('contact')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'contact' ? 'active':'' }}">Contact</a>
        </div>
    </div>
    <!--<a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>-->
</nav>
