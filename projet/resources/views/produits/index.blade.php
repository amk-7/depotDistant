<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>
    <div>
        <table border=1>
            <thead>
                <tr>
                    <td>numéro</td>
                    <td>libelle</td>
                    <td>quantiteStock</td>
                    <td>prixUnitaire</td>
                    <td>caracteristique</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
              @foreach ($produits as $produit)
                <tr>
                  <td>{{$produit->numProduit}}</td>
                  <td>{{$produit->libelle}}</td>
                  <td>{{$produit->quantiteStock}}</td>
                  <td>{{$produit->prixUnitaire}}</td>
                  <td>{{$produit->caracteristique}}</td>
                  <td>
                    <div>
                      <form action="{{route('produits.edit', $produit)}}" method="get">
                        <input type="submit" value="Modifier">
                      </form>
                      <form action="{{route('produits.destroy', $produit)}}" method="post">
                        @csrf
                        <!-- Html n'a pas de méthode delete donc on spécifie-->
                        @method('delete')
                        <input type="submit" value="Supprimer">
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>