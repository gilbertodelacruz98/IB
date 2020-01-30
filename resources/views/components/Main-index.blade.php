<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" src="{{ asset('img/icon/b-logo.png') }}">
    <title>IB-México | @yield('pagina')</title>
    @include('components.Css')
    @section('css')
    @show
</head>
<body id="page-top">
    
    @include('components.Navbar-index')
    @include('components.marcas')
    @include('components.carouseljr')
    
    @include('components.somos')
    @include('components.servicios')
    @include('components.sucursales')
    @include('components.contacto')

    <div class="fixed-action-btn float-left">
        <a href="https://get.teamviewer.com/qs_corpmx" target="_blank" title="Soporte Teamviewer" style="margin: 10px; padding: 0px;">
            <img src="{{ asset('img/icon/teamviewer.png') }}" alt="" class="z-depth-1" style="margin: 10px; 100px 10px 10px">
        </a>
    </div>

    @include('components.Footer')
    @include('components.Js')
    @section('js')
    @show
</body>
</html>