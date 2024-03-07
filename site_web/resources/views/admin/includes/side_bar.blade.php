<div class="sidebar-brand">
    <a href="/">Massanh Express</a>
</div>
<div class="sidebar-brand sidebar-brand-sm">
    <a href="/">ME</a>
</div>
<ul class="sidebar-menu">
    <li class="dropdown active">
        <a href="{{route('admin.dashboard')}}?token={{\Str::random(100)}}" class="nav-link"><span>Dashboard</span></a>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-server"></i> <span><b>Services</b></span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.services')}}?token={{\Str::random(100)}}"><b>Liste services</b></a></li>
            <li><a class="nav-link" href="{{route('admin.demande_services')}}?token={{\Str::random(100)}}"><b>Demandes de services</b></a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-shopping-basket"></i> <span><b>Produits</b></span></a>
        <ul class="dropdown-menu">
            @foreach($categories as $categorie)
                <li><a class="nav-link" href="{{route('admin.produits')}}?token={{\Str::random(100)}}&&categorie_id={{$categorie->id}}">{{$categorie->category}}</a></li>
            @endforeach
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-newspaper"></i> <span><b>Actualité/Travaux</b></span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.actualite')}}?token={{\Str::random(100)}}"><b>Actualités</b></a></li>
            <li><a class="nav-link" href="{{route('admin.realisation')}}?token={{\Str::random(100)}}"><b>Travaux</b></a></li>
        </ul>
    </li>
    <li>
        <a class="nav-link" href="{{route('admin.apropos')}}?token={{\Str::random(100)}}"><i class="fa fa-users"></i> <span><b>A propos</b></span></a>
    </li>
    <li>
        <a class="nav-link" href="{{route('admin.equipe')}}?token={{\Str::random(100)}}"><i class="fa fa-users"></i> <span><b>Equipe</b></span></a>
    </li>
    <li>
        <a class="nav-link" href="{{route('admin.galleries')}}?token={{\Str::random(100)}}"><i class="fa fa-users"></i> <span><b>Gallérie(Vidéos/Images)</b></span></a>
    </li>
    <li>
        <a class="nav-link" href="{{route('admin.contact')}}?token={{\Str::random(100)}}"><i class="fa fa-times-circle"></i> <span><b>Prise de rdv</b></span></a>
    </li>
    <li>
        <a class="nav-link" href="{{route('admin.contact')}}?token={{\Str::random(100)}}"><i class="fa fa-teeth"></i> <span><b>Témoignages</b></span></a>
    </li>
    <li>
        <a class="nav-link" href="{{route('admin.contact')}}?token={{\Str::random(100)}}"><i class="fa fa-parking"></i> <span><b>Parténaires</b></span></a>
    </li>
    <li>
        <a class="nav-link" href="{{route('admin.contact')}}?token={{\Str::random(100)}}"><i class="fa fa-envelope"></i> <span><b>Contact</b></span></a>
    </li>
</ul>
