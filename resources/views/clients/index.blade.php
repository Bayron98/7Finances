@extends('layouts.app')

@section('title', 'Clients')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/clients/index.style.css') }}">
@endsection

@section('scripts')
@endsection

@section('content')
    <a class="add-button" href="{{ route('clients.create') }}">Nouveau client</a>
    <div class="table-container">
        <table>
            <tr class="headers-row">
                <th>Nom</th>
                <th>ICE</th>
                <th>solde</th>
                <th>payé à ce jour</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Plus d'actions</th>
            </tr>
            @foreach ($clients as $client)
                @php
                    $sum = 0;
                @endphp
                @foreach ($client->invoices as $invoice)
                    @foreach ($invoice->invoice_services as $invoice_service)
                        $sum += $invoice_service->prix_unitaire * $invoice_service->quantite;
                    @endforeach
                @endforeach
                <tr>
                    <td><a class="show-path" href="{{ route('clients.show', ['id' => $client->id]) }}">{{ $client->nom }}</a>
                    </td>
                    <td>{{ $client->ice }}</td>
                    <td>{{ $sum }} DHS</td>
                    <td>{{$client->payments()->sum('montant')}} DHS</td>
                    <td>{{ $client->adresse }}</td>
                    <td>{{ $client->ville }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td class="actions-container">
                        <a class="a-edit" href="{{route('clients.edit', ['id'=>$client->id])}}"><button class="action-edit"><i class="fa-solid fa-pen-to-square"></i><span class="action-text">éditer</span></button></a>
                        <form name="delete" method="post" action="{{route('clients.destroy', ['id'=>$client->id])}}">
                            @method('DELETE')
                            @csrf
                            <button class="action-delete" type="submit"><i class="fa-solid fa-trash"></i><span class="action-text">Supprimer</span></button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>


    {{ $clients->links() }}

@endsection
