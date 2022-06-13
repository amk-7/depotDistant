<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une produit</title>
</head>
<body>
    <div>
        <h1>Modification du produit {{$produit->libelle}} </h1>
        <form action="{{route('produits.update', $produit)}}" method="post">
            {{csrf_field()}}
            @method('put')
          <div>
            <label for="libelle">{{__('Nom du produit')}}</label>
            <input type="text" name="libelle" id="" value="{{$produit->libelle}}">
          </div>
          <div>
            <label for="quantite">{{__('Quantite')}}</label>
            <input type="number" name="quantiteStock" id="" value="{{$produit->quantiteStock}}">
          </div>
          <div>
            <label for="prixUnitaire">{{__('Prix unitaire')}}</label>
            <input type="number" name="prixUnitaire" id="" value="{{$produit->prixUnitaire}}">
          </div>
          <div>
            <input type="submit" value="Modifier">
          </div>
        </form>
    </div>
</body>
</html>