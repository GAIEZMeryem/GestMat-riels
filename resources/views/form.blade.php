@extends('index')
@section('title')
<h2 class="my-4">Ajouter un Matériel Informatique</h2>
@endsection
@section('content')
@if (session('type_compte')==0)
<script>
    window.location.href="{{route("login")}}";
</script>
@endif
    <div class="container">
      
        
        <form action="{{route('storeMateriel')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="numero" class="form-label">Numéro du Matériel :</label>
                <input type="text" class="form-control" id="numero" name="numero" required>
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">Désignation :</label>
                <input type="text" class="form-control" id="designation" name="designation" required>
            </div>
            <div class="mb-3">
                <label for="date_achat" class="form-label">Date d'Achat :</label>
                <input type="date" class="form-control" id="date_achat" name="date_achat" required>
            </div>
            <div class="mb-3">
                <label for="etat" class="form-label">État :</label>
                <select class="form-select" id="etat" name="etat" required>
                    <option value="Nouveau">Nouveau</option>
                    <option value="Occasion">Occasion</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="occupation" class="form-label">Occupation :</label>
                <input type="text" class="form-control" id="occupation" name="occupation" required>
            </div>
            <div class="mb-3">
                <label for="raison" class="form-label">Raison de l'Achat :</label>
                <input type="text" class="form-control" id="raison" name="raison" required>
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité :</label>
                <input type="number" class="form-control" id="quantite" name="quantite" required>
            </div>
            <div class="mb-3">
                <label for="num_inventaire" class="form-label">Numéro Inventaire :</label>
                <input type="number" class="form-control" id="num_inventaire" name="num_inventaire" required>
            </div>
            <div class="mb-3">
                <label for="annee_inventaire" class="form-label">Année Inventaire :</label>
                <input type="date" class="form-control" id="annee_inventaire" name="annee_inventaire" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type :</label>
                <select class="form-select" id="type" name="type" required>
                    <option value="Ordinateur">Ordinateur</option>
                    <option value="Imprimante">Imprimante</option>
                    <option value="Web cam">Web cam</option>
                    <option value="Onduleur">Onduleur</option>
                    <option value="point d'accès">Point d'accès</option>
                    <option value="Scanner">Scanner</option>
                    <option value="Retour IAM">Retour IAM</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection