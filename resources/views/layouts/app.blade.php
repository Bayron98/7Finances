<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7Finances - @yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon-7craft.png') }}">
    <link rel="stylesheet" href="{{ asset('css/home.style.css') }}">
    <script src="{{ asset('js/navbar.js') }}"></script>
</head>

<body>
    @section('navbar')
        <div class="navbar">
            <a class="navbar-item" href="{{route('dashboard')}}">Tableau de bord</a>
            <a class="navbar-item" href="{{route('clients.index')}}">Clients</a>
            <a class="navbar-item" href="{{route('projects.index')}}">Projets</a>
            <a class="navbar-item" href="{{route('invoices.index')}}">Factures</a>
            <a class="navbar-item" href="{{route('quotes.index')}}">Devis</a>
            <a class="navbar-item" href="{{route('payments.index')}}">Paiements</a>
            <a class="navbar-item" href="{{route('vendors.index')}}">Fournisseurs</a>
            <a class="navbar-item" href="{{route('expenses.index')}}">Dépenses</a>
        </div>
    @show

    <div class="container">
        <button>&#9776;</button>
        @yield('content')
    </div>
</body>

</html>
