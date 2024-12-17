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

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Montant</th>
                        <th>Statut</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                    <tr>
                        <td class="txt-oflo">{{ $transaction->id }}</td>
                        <td class="txt-oflo">{{ $transaction->montant }}</td>
                        <td><span class="label label-megna label-rounded">{{ $transaction->statut }}</span></td>
                        <td class="txt-oflo">{{ $transaction->date_retrait }}</td>
                        <td>
                            <a href="{{ route('admin.etatTransaction', $transaction->id) }}" class="btn btn-info">Voir</a>
                            <form action="{{ route('admin.changerStatutTransaction', $transaction->id) }}" method="POST" style="display:inline;">
                                @csrf
                                <select name="statut" id="statut">
                                    <option value="traitement_en_cours">Traitement en cours</option>
                                    <option value="succès">Succès</option>
                                    <option value="échec">Échec</option>
                                </select>
                                <button type="submit" class="btn btn-warning">Changer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="#">Check all the transactions</a>
        </div>
    </div>
</div>
@endsection
