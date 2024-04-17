@extends("layout.admin")

@section("content")

<div class=" jumbotron mt-5">
    <div class="card">
       
    <div class="card-header">
        <h3>Modifier le produit : {{$produit->nom}}</h3>
    </div>

    <div class="card-body">
        <form method="post" action="{{route('produit.update', ['prod'=>$produit])}}">
            @csrf
           

            <div class="mb-3">
                <label for="validationDefault01">Nom</label>
                <input type="text" name="nom" value="{{$produit->nom}}" class="form-control" id="validationDefault01" required>
            </div>
            <div class="mb-3">
                <label for="validationDefault02">Description</label>
                <textarea class="form-control" name="description">{{$produit->description}}</textarea>

            </div>

            <div class="row">

               

                <div class="col-3 mb-3">
                    <label for="validationDefault03">Prix</label>
                    <input type="number" name="prix" value="{{$produit->prix}}" class="form-control" id="validationDefault03" required>
                </div>
                <div class="col-3 form-check form-switch mt-4">
                    <label class="form-check-label" for="flexSwitchCheckChecked">D'accord ?</label>
                    <input class="form-check-input" @if ($produit->accord)
                        @checked(true)
                    @endif type="checkbox" id="flexSwitchCheckChecked"  name="accord">
                </div>

                <div class="col-3 form-check form-switch mt-4">
                    <label class="form-check-label" for="flexSwitchCheckChecked1">Enfants ? </label>
                    <input class="form-check-input" @if ($produit->enfant)
                        @checked(true)
                        
                    @endif type="checkbox" id="flexSwitchCheckChecked1"  name="enfant">
                </div>

                <div class="col-3 form-check form-switch mt-4">
                    <label class="form-check-label" for="flexSwitchCheckChecked1">Bien ? </label>
                    <input class="form-check-input" @if ($produit->bien)
                        @checked(true)
                        
                    @endif type="checkbox" id="flexSwitchCheckChecked1"  name="bien">
                </div>
                

            </div>

            <button class="btn btn-warning" type="submit"> Mettre à jour  </button>

        </form>
      
    </div>
    
</div>

@endsection
    