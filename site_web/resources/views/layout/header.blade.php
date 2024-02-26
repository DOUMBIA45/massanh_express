<a href="" class="navbar- p-0">
    <!--<h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>-->
    <img src="assets/img/logo.jpeg" alt="Logo" style="height: 86px;width: 150px">
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="fa fa-bars"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
        <a href="{{route('HomePage')}}" class="nav-item nav-link {{Route::current()->getName() == 'HomePage' ? 'active':'' }}"><b>Accueil</b></a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle {{Route::current()->getName() == 'listeProduits' ? 'active':'' }}" data-bs-toggle="dropdown"><b>Produits</b></a>
            <div class="dropdown-menu m-0">
                <a href="{{route('listeProduits')}}?token={{\Str::random(100)}}" class="dropdown-item">Equipements médicaux</a>
                <a href="{{route('listeProduits')}}?token={{\Str::random(100)}}" class="dropdown-item">Gaz et Fluids médicaux</a>
                <a href="{{route('listeProduits')}}?token={{\Str::random(100)}}" class="dropdown-item">Traitement des déchets</a>
            </div>
        </div>
        <a href="{{route('actualite')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'actualite' ? 'active':'' }}"><b>Actualité</b></a>
        <a href="{{route('equipe')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'equipe' ? 'active':'' }}"><b>Equipe</b></a>
        <a href="{{route('contact')}}?token={{\Str::random(100)}}" class="nav-item nav-link {{Route::current()->getName() == 'contact' ? 'active':'' }}"><b>Contact</b></a>
    </div>
</div>
