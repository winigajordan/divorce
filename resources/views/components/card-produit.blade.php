<div class="card card-header col-auto m-2 text-center">
                              
    <a class="mb-1" href="{{route("produit.show", ["id"=>$produit->id])}}"> {{$produit->nom}} </a>
     
      <a href="{{route("produit.edit", ["id"=>$produit->id])}}" class="btn btn-primary mb-1">Modifier</a>
      <a href="{{route("produit.delete", ["id"=>$produit->id])}}" class="btn btn-warning ">Supprimer</a>
      
</div>