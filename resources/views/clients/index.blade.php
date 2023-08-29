@extends('layouts.app')

@section('title', 'Clients')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/clients.style.css') }}">
@endsection

@section('scripts')

@endsection

@section('content')

    <table>
        <tr>
            <th>Nom</th>
            <th>ICE</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Email</th>
            <th>Téléphone</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->nom }}</td>
                <td>{{ $client->ice }}</td>
                <td>{{ $client->adresse }}</td>
                <td>{{ $client->ville }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->telephone }}</td>
            </tr>
        @endforeach
    </table>

    {{ $clients->links() }}

@endsection


