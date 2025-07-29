<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'Plataforma de Cursos')</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-compass"></span> <span>Menú</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}"><span class="las la-home"></span><span>Dashboard</span></a></li>
                <li><a href="#"><span class="las la-trophy"></span><span>Ranking</span></a></li>
                <li><a href="#"><span class="las la-life-ring"></span><span>Soporte</span></a></li>
                <li><a href="#"><span class="las la-store"></span><span>Tienda</span></a></li>
                <li><a href="#"><span class="las la-plus-circle"></span><span>Crear Curso</span></a></li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-logo-container">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="header-logo">
            </div>
            
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Buscar cursos...">
            </div>

            <div class="user-actions">
                <span class="las la-university" title="Mis Cursos"></span>
                <label for="nav-toggle" class="nav-toggle-label">
                    <span class="las la-bars" title="Menú"></span>
                </label>
                <span class="las la-user-circle" title="Mi Perfil"></span>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html>