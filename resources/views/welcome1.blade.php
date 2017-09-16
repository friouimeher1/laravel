<h1>
<p>ID :{{$c->id}}</p>
<p>Name : {{$c->name}}</p>
<p>Prénom :{{$c->prenom}}
</p>
<p>Téléphone :{{$c->telephone}}
  <p>Email :{{$c->email}}</p>
  <p>address :{{$c->adresse}}
    <p>Name Product :</p>
    @foreach($c->produits as $produit)
    {{$produit->nom}}
    @endforeach
</h1>
