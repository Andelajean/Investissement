@extends('admin.layouts')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">État de la Transaction</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Détails de la Transaction</h3>
            </div>
            <div class="panel-body">
                {{-- Affichage du statut actuel --}}
                <p>
                    <strong>Statut actuel :</strong> 
                    <span class="label label-{{ $statut == 'succès' ? 'success' : ($statut == 'échec' ? 'danger' : 'warning') }}">
                        {{ $statut }}
                    </span>
                </p>

                {{-- Vérification si $retrait ou $depot est disponible --}}
                @if(isset($retrait) && $retrait)
                    <form action="{{ route('admin.changerStatutTransaction', $retrait->id) }}" method="POST" class="form-inline">
                        @csrf
                        <div class="form-group">
                            <label for="statut">Changer le statut :</label>
                            <select name="statut" id="statut" class="form-control">
                                <option value="traitement_en_cours" {{ $statut == 'traitement_en_cours' ? 'selected' : '' }}>Traitement en cours</option>
                                <option value="succès" {{ $statut == 'succès' ? 'selected' : '' }}>Succès</option>
                                <option value="échec" {{ $statut == 'échec' ? 'selected' : '' }}>Échec</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                @elseif(isset($depot) && $depot)
                    <form action="{{ route('admin.changerStatutTransaction', $depot->id) }}" method="POST" class="form-inline">
                        @csrf
                        <div class="form-group">
                            <label for="statut">Changer le statut :</label>
                            <select name="statut" id="statut" class="form-control">
                                <option value="traitement_en_cours" {{ $statut == 'traitement_en_cours' ? 'selected' : '' }}>Traitement en cours</option>
                                <option value="succès" {{ $statut == 'succès' ? 'selected' : '' }}>Succès</option>
                                <option value="échec" {{ $statut == 'échec' ? 'selected' : '' }}>Échec</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                @else
                    <p>Aucune transaction trouvée.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="changeStatusModal" tabindex="-1" role="dialog" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="changeStatusForm" method="POST" 
                action="{{ isset($retrait) && $retrait ? route('admin.changerStatutTransaction', $retrait->id) : (isset($depot) && $depot ? route('admin.changerStatutTransaction', $depot->id) : '#') }}">
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
                    window.location.href = "{{ route('admin.transaction_retrait') }}";
                }, 3000);
            },
            error: function(response) {
                alert('Une erreur est survenue. Veuillez réessayer.');
            }
        });
    });
</script>
@endsection
