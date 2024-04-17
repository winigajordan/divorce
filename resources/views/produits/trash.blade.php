@extends("layout.admin")

@section("content")

<div class=" jumbotron mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Corbeille</h3>
        </div>
        <div class="card-body">
        
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produits as $produit)
                    <tr>
                        <td>{{$produit->nom}}</td>
                        <td>{{$produit->prix}}</td>
                       
                        <td>
                            <a href="{{route('produit.restore', ['id'=>$produit->id])}}" class="btn btn-success">Restaurer</a>
                            <a href="{{route('produit.forcedelete', ['id'=>$produit->id])}}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        
        </div>
    </div>
    
</div>

@endsection
    