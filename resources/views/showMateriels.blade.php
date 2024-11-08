@extends('index')
@section('title')
<h2>Liste des Matériels Informatiques</h2>
@endsection
@section('content')
@if (session('type_compte')==0)
<script>
    window.location.href="{{route("login")}}";
</script>
@endif

<div class="container">
  
    <div class="container">
        @if (session()->has("status"))
        <div class="alert alert-success" role="alert">
          {{ session()->get("status") }}
        </div>
        @endif
    <table border="1" class="table">
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Désignation</th>
                <th>Date d'Achat</th>
                <th>État</th>
                <th>Occupation</th>
                <th>Raison de l'Achat</th>
                <th>Quantité</th>
                <th>Numéro Inventaire</th>
                <th>Année Inventaire</th>
                <th>Type du materiel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materiels as $materiel)
            <tr>
                <td>{{ $materiel->Numero_materiel }}</td>
                <td>{{ $materiel->Designation }}</td>
                <td>{{ $materiel->Date_achat }}</td>
                <td>{{ $materiel->Etat }}</td>
                <td>{{ $materiel->Occupation }}</td>
                <td>{{ $materiel->Raison_achat }}</td>
                <td>{{ $materiel->Quantite }}</td>
                <td>{{ $materiel->Num_inventaire }}</td>
                <td>{{ $materiel->Annee_inventaire }}</td>
                <td>{{ $materiel->Type_materiel }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <button type="submit" class="btn btn-success btn-sm" href="{{ route('editMateriel', ['numero' => $materiel->Numero_materiel]) }}">Modifier</button>
                      <form method="POST" action="{{ route('deleteMateriel', ['numero' => $materiel->Numero_materiel]) }}" class="d-inline-block">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce materiel ?')">Supprimer</button>
                      </form>
                    </div>
                  </td>
            </tr>
       @endforeach
        </tbody>
    </table>
</div>

@endsection