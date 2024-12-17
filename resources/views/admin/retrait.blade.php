@extends('admin.layouts')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">État des Transactions</h1>
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
                    @foreach($retraits as $transaction)
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
                            <button class="btn btn-warning btn-sm" onclick="showChangeStatusModal({{ $transaction->id }}, '{{ $transaction->statut }}')">Changer</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="#" class="btn btn-primary">Voir toutes les transactions</a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="changeStatusModal" tabindex="-1" role="dialog" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="changeStatusForm" method="POST" action="{{ route('admin.changerStatutTransaction', $transaction->id) }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="changeStatusModalLabel">Changer le statut de la transaction</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="transaction_id" id="transaction_id">
                    <div class="form-group">
                        <label for="statut">Statut</label>
                        <select name="statut" id="statut" class="form-control">
                            <option value="traitement_en_cours">Traitement en cours</option>
                            <option value="succès">Succès</option>
                            <option value="échec">Échec</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function showChangeStatusModal(transactionId, currentStatus) {
        $('#transaction_id').val(transactionId);
        $('#statut').val(currentStatus);
        $('#changeStatusModal').modal('show');
    }

    $('#changeStatusForm').on('submit', function(event) {
        event.preventDefault();
        var transactionId = $('#transaction_id').val();
        var statut = $('#statut').val();
        var url = "{{ route('admin.changerStatutTransaction', ':id') }}";
        url = url.replace(':id', transactionId);

        $.ajax({
            url: url,
            method: 'POST',
            data: $(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('#changeStatusModal').modal('hide');
                $('#notification').fadeIn().delay(3000).fadeOut();
                setTimeout(function() {
                    location.reload();
                }, 3000);
            },
            error: function(response) {
                alert('Une erreur est survenue. Veuillez réessayer.');
            }
        });
    });
</script>
@endsection
