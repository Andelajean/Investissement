@extends('admin.layouts')

@section('content')
    <h1 class="my-4">Liste des Contacts</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Objet</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->nom }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->objet }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
