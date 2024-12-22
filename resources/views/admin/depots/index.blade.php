@extends('admin.layouts')

@section('content')
    <h1 class="my-4">Liste des Dépôts</h1>

    @if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

   



    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addDepotModal">Ajouter un Dépôt</button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Dépôt</th>
                <th>Montant</th>
                <th>Devise</th>
                <th>Email</th>
                <th>ID Utilisateur</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($depots as $depot)
                <tr>
                    <td>{{ $depot->id_depot }}</td>
                    <td>{{ $depot->montant }}</td>
                    <td>{{ $depot->devise }}</td>
                    <td>{{ $depot->email }}</td>
                    <td>{{ $depot->id_user }}</td>
                    <td>{{ $depot->date_depot }}</td>
                    <td>
                        <a href="{{ route('admin.show_depot', $depot->id) }}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{ route('admin.edit_depot', $depot->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        <form action="{{ route('admin.destroy_depot', $depot->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $depots->links() }}

    <!-- Modal -->
    <div class="modal fade" id="addDepotModal" tabindex="-1" role="dialog" aria-labelledby="addDepotModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('admin.store_depot') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDepotModalLabel">Ajouter un Dépôt</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="montant">Montant</label>
                            <input type="text" name="montant" id="montant" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="devise">Devise</label>
                            <input type="text" name="devise" id="devise" class="form-control" maxlength="3" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="id_user">ID Utilisateur</label>
                            <input type="text" name="id_user" id="id_user" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
