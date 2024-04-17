@extends("layout.admin")

@section("content")

<div class=" jumbotron mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Nom : {{$produit->nom}}</h3>

        </div>
        <div class="card-body">
            <h5 class="card-title">Nom : {{$produit->nom}}</h5>
            <h5>Description : {{$produit->description}}</h5>
            <h5>Prix : {{$produit->prix}}</h5>
            <h5>Accord pour divorce :@if($produit->accord)
               Oui
            @else
                Non
            @endif
            </h5>

            <h5>Enfant :@if($produit->enfant)
                Oui
             @else
                 Non
             @endif
             </h5>

             <h5>Bien :@if($produit->bien)
                Oui
             @else
                 Non
             @endif
             </h5>

        

            <a href="{{route('produit.index')}}" class="btn btn-primary">Retour</a>
        </div>
    </div>
    
</div>

@endsection
    