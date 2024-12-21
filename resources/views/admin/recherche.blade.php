
@extends('layout')

@section('content')
    <h1>Recherche Client</h1>
    <form action="{{ route('admin.recherche') }}" method="GET">
        <input type="text" name="query" placeholder="Nom ou téléphone">
        <button type="submit">Rechercher</button>
    </form>
    <ul>
        @foreach($clients as $client)
            <li>{{ $client->name }} - {{ $client->telephone }}</li>
        @endforeach
    </ul>
@endsection
