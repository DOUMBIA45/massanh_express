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
    <li>
        <a class="nav-link" href="{{route('admin.services')}}?token={{\Str::random(100)}}"><i class="fa fa-server"></i> <span><b>Services</b></span></a>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-newspaper"></i> <span><b>Actualité/Travaux</b></span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.actualite')}}?token={{\Str::random(100)}}"><b>Actualités</b></a></li>
            <li><a class="nav-link" href="{{route('admin.realisation')}}?token={{\Str::random(100)}}"><b>Réalisations</b></a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fa fa-shopping-basket"></i> <span><b>Produits</b></span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
            <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
        </ul>
    </li>
    <li>
        <a class="nav-link" href="blank.html"><i class="fa fa-question"></i> <span><b>A propos</b></span></a>
    </li>
    <li>
        <a class="nav-link" href="blank.html"><i class="fa fa-envelope"></i> <span><b>Contact</b></span></a>
    </li>
</ul>
