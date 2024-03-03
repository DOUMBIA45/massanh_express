
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head')
</head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            @include('admin.includes.nav_bar')
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
               @include('admin.includes.side_bar')
            </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            @yield('admin_content')
        </div>
        <footer class="main-footer">
            @include('admin.includes.footer')
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
@include('admin.includes.script')
</body>
</html>
