@extends('layouts.app')

@section('title', 'espace admin')


@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/index.style.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/admin/index.js') }}"></script>
@endsection



@section('topbar-right-container')
    <a href="{{ route('dashboard') }}">
        <button class="btn-back">
            <i class="fa-solid fa-arrow-left"></i>
            Retour
        </button>
    </a>
    <a href="{{ route('users.index') }}">
        <button class="btn-users">
            <i class="fa-solid fa-users-gear"></i>
            Gestion des utilisateurs
        </button>
    </a>
    <a href="{{ route('admin.edit') }}">
        <button class="btn-admin">
            <i class="fa-solid fa-user-gear"></i>
            Modifier vos infos
        </button>
    </a>
@endsection
@section('content')
<div class="infos-container">
    <div class="infos">
        <div class="infos-section">
            <span class="label">Nom: </span>
            <span class="data">{{auth()->user()->name}}</span>
        </div>
        <div class="infos-section">
            <span class="label">Email: </span>
            <span class="data">{{auth()->user()->email}}</span>
        </div>
        <div class="infos-section">
            <span class="label">Password: </span>
            <span class="data">****</span>
        </div>
    </div>
</div>
@endsection
