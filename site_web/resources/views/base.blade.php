
<!DOCTYPE html>
<html lang="en">
<head>
@include('layout.head')
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
    @include('layout.topbar')
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
@include('layout.header')
<!-- Navbar End -->

@yield('content')

<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
   @include('layout.footer')
    <div class="container-fluid copyright">
        <div class="container">
            @include('layout.copyright')
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
@include('layout.script')

</body>
</html>
