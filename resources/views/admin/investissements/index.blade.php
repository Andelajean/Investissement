@extends('admin.layouts')

@section('content')
    <h1 class="my-4">Liste des Investissements</h1>

    @if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif

   



   
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOM INVESTISSMENT</th>
                <th>MONTANT</th>
                <th>DUREE</th>
                <th>STATUT</th>
                <th>GAIN</th>
                <th>DATE INVESTISSEMENT</th>
                <th>EMAIL INVESTISSEUR</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($investissements as $investissement)
                <tr>
                    <td>{{ $investissement->id }}</td>
                    <td>{{ $investissement->nom_investissement }}</td>
                    <td>{{ $investissement->montant }}</td>
                    <td>{{ $investissement->duree }}</td>
                    <td>{{ $investissement->statut }}</td>
                    <td>{{ $investissement->gain }}</td>
                    <td>{{ $investissement->date_investissment }}</td>
                    <td>{{ $investissement->email }}</td>
                    <td>
                        @if( $investissement->statut == 'oui')
                         <a href="{{ route('admin.desactiver.investissement', $investissement->id) }}" class="btn btn-info btn-sm">Desactiver</a>
                        @else
                         <a href="{{ route('admin.activer.investissement', $investissement->id) }}" class="btn btn-warning btn-sm">Activer</a>
                        @endif
                         <form action="{{ route('admin.supprimer.investissement', $investissement->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                         </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $investissements->links() }}

   
@endsection
