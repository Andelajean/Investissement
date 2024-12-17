@extends('admin.layouts')

@section('content')
    <h1 class="my-4">Mon Solde</h1>
    <p>Le solde total de l'entreprise est : {{ $totalBalance }}.</p>
@endsection
