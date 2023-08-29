<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7Finances - @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon-7craft.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.style.css') }}">
    @yield('styles')
    <script src="{{ asset('js/navbar.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('scripts')
</head>

<body>
    @section('navbar')
        <div class="navbar open">
            <div class="navbar-close navbar-item"><span class="navbar-text">Fermer</span> <i class="fa-solid fa-xmark"></i></div>
            <hr class="navbar-separator">
            <a class="navbar-item" href="{{route('dashboard')}}"><i class="fa-solid fa-house"></i><span class="navbar-text">Tableau de bord</span></a>
            <a class="navbar-item" href="{{route('clients.index')}}"><i class="fa-solid fa-users"></i><span class="navbar-text">Clients</span></a>
            <a class="navbar-item" href="{{route('projects.index')}}"><i class="fa-solid fa-suitcase"></i><span class="navbar-text">Projets</span></a>
            <a class="navbar-item" href="{{route('invoices.index')}}"><i class="fa-solid fa-file-invoice-dollar"></i><span class="navbar-text">Factures</span></a>
            <a class="navbar-item" href="{{route('quotes.index')}}"><i class="fa-solid fa-file-invoice"></i><span class="navbar-text">Devis</span></a>
            <a class="navbar-item" href="{{route('payments.index')}}"><i class="fa-solid fa-money-check-dollar"></i><span class="navbar-text">Paiements</span></a>
            <a class="navbar-item" href="{{route('vendors.index')}}"><i class="fa-solid fa-truck"></i><span class="navbar-text">Fournisseurs</span></a>
            <a class="navbar-item" href="{{route('expenses.index')}}"><i class="fa-solid fa-receipt"></i><span class="navbar-text">Dépenses</span></a>
        </div>
    @show

    <div class="container">
        <div class="topbar">
            <div class="navbar-open">&#9776;</div>
            <div class="topbar-title">@yield('title')</div>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>

</html>
