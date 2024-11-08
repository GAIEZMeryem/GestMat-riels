@extends('index')
@section('title')
<h2 class="my-4">Liste des pannes</h2>
@endsection
@section('content')
    
@if (session('type_compte')==0)
<script>
    window.location.href="{{route("login")}}";
</script>
@endif
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<table border="1" class="table">
    <thead>
        <tr>
            <th>Intitule de panne</th>
            <th>Description</th>
            <th>Materiel</th>
            <th>Utilisateur</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pannes as $panne)
            <tr>
                <td>{{ $panne->intitule }}</td>
                <td>{{ $panne->description }}</td>
                <td>{{ $panne->Designation}}</td>
                <td>{{ $panne->PPR }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection