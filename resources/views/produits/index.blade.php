@extends("layout.admin")

@section("content")

<div class=" jumbotron">
    <div class="row">
        <div class="col-6">
            <div class="card mt-3">
                <div class="card-header">
                    Ajout de produit
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('produit.save')}}">
                        @csrf
                        @if($errors->any())
                        @foreach($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Attention - </strong>  {{ $error }} 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                       
                        @endforeach
                        @endif

                

                        @if(session('success'))

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong> {{ session('success') }} </strong>  
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        @endif


                        <div class="mb-3">
                            <label for="validationDefault01">Nom</label>
                            <input type="text" name="nom" class="form-control" id="validationDefault01" required>
                        </div>
                        <div class="mb-3">
                            <label for="validationDefault02">Description</label>
                            <textarea class="form-control" name="description"></textarea>

                        </div>

                        <div class="row">

                            <div class="col-3 mb-3">
                                <label for="validationDefault03">Prix</label>
                                <input type="number" name="prix" class="form-control" id="validationDefault03" required>
                            </div>
                            <div class="col-3 form-check form-switch mt-4">
                                <label class="form-check-label" for="flexSwitchCheckChecked">D'accord ? </label>
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"  name="accord">
                            </div>
                            <div class="col-3 form-check form-switch mt-4">
                                <label class="form-check-label" for="flexSwitchCheckChecked1">Enfants ? </label>
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked1"  name="enfant">
                            </div>

                            <div class="col-3 form-check form-switch mt-4">
                                <label class="form-check-label" for="flexSwitchCheckChecked1">Biens ? </label>
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked1"  name="bien">
                            </div>
                            

                        </div>

                        <button class="btn btn-primary" type="submit"> Ajouter </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card mt-3">
                <div class="card-header">
                    Liste des produits
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($produits as $produit)
                        
                            <x-card-produit :produit="$produit" />
                    
                        @endforeach
                       
                    </div>
                </div>
                <div class="card-footer">
                    
                     <p>
                    {{ $produits->links() }}
                    </p>
                </div>
                
            </div>
           
        </div>
    </div>
</div>

@endsection