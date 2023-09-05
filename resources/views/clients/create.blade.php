@extends('layouts.app')

@section('title', 'Créer un client')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/clients/create-edit.style.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/clients.js') }}"></script>
@endsection


{{-- $table->string('nom');
$table->string('ice');
$table->string('adresse');
$table->string('ville');
$table->string('email');
$table->string('telephone'); --}}
@section('topbar-right-container')
    <a class="a-back" href="{{ route('clients.index') }}"><button class="back-button"><i
                class="fa-solid fa-arrow-left"></i><span class="topbar-text">Retour</span></button></a>
    <button class="submit-button"><i class="fa-solid fa-floppy-disk"></i><span class="topbar-text">Sauvegarder</span></button>
@endsection
@section('content')
    <form class="create-form" name="form0" action="{{ route('clients.store') }}" method="post">
        @csrf
        <div class="form-section">
            <label class="label-field" for="nom">Nom: </label>
            <input class="input-field" type="text" name="nom" id="nom" value="{{ old('nom') }}">
        </div>
        @error('nom')
            <div class="error">{{ $message }}
                <span class="error-icon">&times;</span>
            </div>
        @enderror
        <div class="form-section">
            <label class="label-field" for="ice">ICE: </label>
            <input class="input-field" type="text" name="ice" id="ice" value="{{ old('ice') }}">
        </div>
        @error('ice')
            <div class="error">{{ $message }}
                <span class="error-icon">&times;</span>
            </div>
        @enderror
        <div class="form-section">
            <label class="label-field" for="adresse">Adresse: </label>
            <input class="input-field" type="text" name="adresse" id="adresse" value="{{ old('adresse') }}">
        </div>
        @error('adresse')
            <div class="error">{{ $message }}
                <span class="error-icon">&times;</span>
            </div>
        @enderror
        <div class="form-section">
            <label class="label-field" for="ville">Ville: </label>
            <input class="input-field" type="text" name="ville" id="ville" value="{{ old('ville') }}">
        </div>
        @error('ville')
            <div class="error">{{ $message }}
                <span class="error-icon">&times;</span>
            </div>
        @enderror
        <div class="form-section">
            <label class="label-field" for="email">Email: </label>
            <input class="input-field" type="email" name="email" id="email" value="{{ old('email') }}">
        </div>
        @error('email')
            <div class="error">{{ $message }}
                <span class="error-icon">&times;</span>
            </div>
        @enderror
        <div class="form-section">
            <label class="label-field" for="telephone">telephone: </label>
            <input class="input-field" type="tel" name="telephone" id="telephone" value="{{ old('telephone') }}">
        </div>
        @error('telephone')
            <div class="error">{{ $message }}
                <span class="error-icon">&times;</span>
            </div>
        @enderror





    </form>
@endsection
