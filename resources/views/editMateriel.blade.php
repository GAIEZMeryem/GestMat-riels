@extends('index')
@section('title')
<h2 class="my-4">Modifier un Matériel Informatique</h2>
@endsection
@section('content')
    
@if (session('type_compte')==0)
<script>
    window.location.href="{{route("login")}}";
</script>
@endif
    <div class="container">
 
        
        <form action="{{route('updateMateriel', ['numero' => $materiels[0]->Numero_materiel]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="numero" class="form-label">Numéro du Matériel :</label>
                <input type="text" class="form-control" id="numero" name="numero" disabled  value="{{$materiels[0]->Numero_materiel}}" required>
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Désignation :</label>
                <input type="text" class="form-control" id="designation" name="designation" value="{{$materiels[0]->Designation}}" required>
            </div>
            <div class="mb-3">
                <label for="date_achat" class="form-label">Date d'Achat :</label>
                <input type="date" class="form-control" id="date_achat" name="date_achat" value="{{$materiels[0]->Date_achat}}" required>
            </div>
            <div class="mb-3">
                <label for="etat" class="form-label">État :</label>
                <select class="form-select" id="etat" name="etat" value="{{$materiels[0]->Etat}}" required>
                    <option value="Nouveau">Nouveau</option>
                    <option value="Occasion">Occasion</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="occupation" class="form-label">Occupation :</label>
                <input type="text" class="form-control" id="occupation" name="occupation" value="{{$materiels[0]->Occupation}}" required>
            </div>
            <div class="mb-3">
                <label for="raison" class="form-label">Raison de l'Achat :</label>
                <input type="text" class="form-control" id="raison" name="raison" value="{{$materiels[0]->Raison_achat}}" required>
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité :</label>
                <input type="number" class="form-control" id="quantite" name="quantite" value="{{$materiels[0]->Quantite}}" required>
            </div>
            <div class="mb-3">
                <label for="num_inventaire" class="form-label">Numéro Inventaire :</label>
                <input type="number" class="form-control" id="num_inventaire" name="num_inventaire" value="{{$materiels[0]->Num_inventaire}}" required>
            </div>
            <div class="mb-3">
                <label for="annee_inventaire" class="form-label">Année Inventaire :</label>
                <input type="date" class="form-control" id="annee_inventaire" name="annee_inventaire" value="{{$materiels[0]->Annee_inventaire}}" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type :</label>
                <select class="form-select" id="type" name="type" value="{{$materiels[0]->Type_materiel}}" required>
                    <option value="Ordinateur">Ordinateur</option>
                    <option value="Imprimante">Imprimante</option>
                    <option value="Web cam">Web cam</option>
                    <option value="Onduleur">Onduleur</option>
                    <option value="point d'accès">Point d'accès</option>
                    <option value="Scanner">Scanner</option>
                    <option value="Retour IAM">Retour IAM</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
    @endsection