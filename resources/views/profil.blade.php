@extends('index')
@section('title')
<h1 class="mb-4">Mon Profil</h1>
@endsection
@section('content')
    <div class="container">
    
        <div class="list-group">
            @foreach ($users as $user)
                <div class="list-group-item">
                    <h5 class="mb-3"><strong>PPR:</strong> {{ $user->PPR }}</h5>
                    <p><strong>Nom:</strong> {{ $user->Nom }}</p>
                    <p><strong>Prenom:</strong> {{ $user->Prenom }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                 
                    @if (($user->type_compte)==0 )
                    <p><strong>Type Compte:</strong> Simple utilisateur </p>
                    @else
                    <p><strong>Type Compte:</strong> Responsable </p>
                    @endif
                   
                </div>
            @endforeach
        </div>
    </div>
@endsection
