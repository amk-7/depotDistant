<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer une produit</title>
</head>
<body>
    <div>
      <h1>Enregister un produit</h1>
        <form class="main-form" action="{{route('produits.store')}}" method="post">
          @csrf 
          <fieldset>
            <div>
              <label for="libelle">Nom du produit</label>
              <input type="text" name="libelle" id="">
            </div>
            <div>
              <label for="quantite">Quantite</label>
              <input type="number" name="quantiteStock" id="">
            </div>
            <div>
              <label for="prixUnitaire">Prix unitaire</label>
              <input type="number" name="prixUnitaire" id="">
            </div>
            <div>
              <label for="caracteristique">Caracteristique</label>
              <input type="text" name="caracteristique" id="">
            </div>
            <div>
              <input type="submit" value="Enregister">
            </div>
          </fieldset>
        </form>
    </div>
</body>
</html>