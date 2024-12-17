@extends('admin.layouts')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Toutes les Transactions</h1>
        <div id="notification" class="alert alert-success" style="display: none;">
            Statut de la transaction mis à jour avec succès.
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
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
                        <td>
                            <span class="label label-{{ $transaction->statut == 'succès' ? 'success' : ($transaction->statut == 'échec' ? 'danger' : 'warning') }} label-rounded">
                                {{ $transaction->statut }}
                            </span>
                        </td>
                        <td class="txt-oflo">{{ $transaction->date_retrait }}</td>
                        <td>
                            <a href="{{ route('admin.etatTransaction', $transaction->id) }}" class="btn btn-info btn-sm">Voir</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


