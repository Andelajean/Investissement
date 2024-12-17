@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>État de la Transaction</h1>
        <p>Statut actuel : {{ $statut }}</p>

        <form action="{{ route('admin.changerStatutTransaction', $retrait->id) }}" method="POST">
            @csrf
            <label for="statut">Changer le statut :</label>
            <select name="statut" id="statut">
                <option value="traitement_en_cours">Traitement en cours</option>
                <option value="succès">Succès</option>
                <option value="échec">Échec</option>
            </select>
            <button type="submit">Mettre à jour</button>
        </form>
    </div>
</div>
@endsection
