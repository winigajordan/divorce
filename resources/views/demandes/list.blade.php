@extends("layout.admin")

@section("content")

<div class=" jumbotron mt-5">
    <div class="card">
        <div class="card-header">
            <h3> Liste des demandes </h3>

        </div>
        <div class="card-body">
           
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Téléphone</th>
                      <th scope="col">Mail</th>
                      <th scope="col">Produit </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($demandes as $demande)
                    <tr>
                      <th scope="row">{{$demande->nom}}</th>
                      <td>{{$demande->telephone}}</td>
                      <td>{{$demande->email}}</td>
                      <td>{{$demande->produit->nom}}</td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>

            
        </div>
    </div>
    
</div>

@endsection
    