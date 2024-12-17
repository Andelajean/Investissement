@extends('admin.layouts')

@section('content')
    <h1 class="my-4">Détails du Dépôt</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID Dépôt: {{ $depot->id_depot }}</h5>
            <p class="card-text">Montant: {{ $depot->montant }}</p>
            <p class="card-text">Devise: {{ $depot->devise }}</p>
            <p class="card-text">Email: {{ $depot->email }}</p>
            <p class="card-text">ID Utilisateur: {{ $depot->id_user }}</p>
            <p class="card-text">Date: {{ $depot->date_depot }}</p>
            <a href="{{ route('admin.depots') }}" class="btn btn-primary">Retour</a>
        </div>
    </div>
@endsection
