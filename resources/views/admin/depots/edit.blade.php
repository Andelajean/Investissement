@extends('admin.layouts')

@section('content')
    <h1 class="my-4">Modifier le Dépôt</h1>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <form action="{{ route('admin.update_depot', $depot->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="montant">Montant</label>
            <input type="text" name="montant" id="montant" class="form-control" value="{{ $depot->montant }}" required>
        </div>
        <div class="form-group">
            <label for="devise">Devise</label>
            <input type="text" name="devise" id="devise" class="form-control" value="{{ $depot->devise }}" maxlength="3" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $depot->email }}" required>
        </div>
        <div class="form-group">
            <label for="id_user">ID Utilisateur</label>
            <input type="text" name="id_user" id="id_user" class="form-control" value="{{ $depot->id_user }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
    <a href="{{ route('admin.depots') }}" class="btn btn-primary">Retour</a>
@endsection
