@extends('index')
@section('title')
<h2 class="my-4">Declarer une panne</h2>
@endsection
@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<form action="{{route('storePanne')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="numero" class="form-label">Intitule de panne :</label>
        <input type="text" class="form-control" id="intitule" name="intitule" required>
    </div>
    <div class="mb-3">
        <label for="designation" class="form-label">Description :</label>
       <textarea name="description" id="description" cols=30" rows="5"></textarea>
    </div>
    <div class="mb-3">
        <label for="numero_materiel" class="form-label">Materiel :</label>
        <select class="form-select" id="numero_materiel" name="numero_materiel" required>
            @foreach ($materiels as $item)
                 <option value="{{$item->Numero_materiel}}">{{$item->Designation}}</option>
            @endforeach
           
    
        </select>
    </div>

    <div class="mb-3">
        <label for="occupation" class="form-label">PPR :</label>
        <input type="text" class="form-control" id="PPR" name="PPR" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Reclamer</button>
</form>
@endsection