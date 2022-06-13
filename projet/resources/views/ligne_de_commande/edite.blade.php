<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un employé</title>
</head>
<body>
    <div>
        <h1>Modification d'un employe </h1>
        <form action="" method="post">
            {{csrf_field()}}
            @method('put')
          <div>
            <label for="nomEmploye">{{__('Nom Employé')}}</label>
            <input type="text" name="nomEmploye" id="" value="">
          </div>
          <div>
            <label for="prenom">{{__('Prénom Employé')}}</label>
            <input type="text" name="prenom" id="" value="">
          </div>
          <div>
            <label for="sex">{{__('Sex')}}</label>
            <select name="sex" id="">
              <option value="Masculin">Masculin</option>
              <option value="Féminin">Féminin</option>
            </select>
          </div>
          <div>
            <label for="dateNaiss">{{__('Date De Naissance')}}</label>
            <input type="date" name="dateNaiss" id="" value="">
          </div>
          <div>
            <label for="adresse">{{__('Adresse')}}</label>
            <input type="text" name="adresse" id="" value="">
          </div>
          <div>
            <label for="numero">{{__('Numéro de téléphone')}}</label>
            <input type="text" name="numero" id="" value="">
          </div>
          <div>
            <label for="email">{{__('Email')}}</label>
            <input type="email" name="email" id="" value="">
          </div>
          <div>
            <label for="motDePasse">{{__('Mot De Passe')}}</label>
            <input type="password" name="motDePasse" id="" value="">
          </div>
          <div>
            <label for="avatar">{{__('Avatar')}}</label>
            <input type="file" name="avatar" id="" value="">
            <textarea name="" id="" cols="30" rows="10">

            </textarea>
          </div>
          <div>
            <label for="status">{{__('Status')}}</label>
            <input type="number" name="status" id="" value="{{}}">
          </div>
          <div>
            <input type="submit" value="Modifier">
          </div>
        </form>
    </div>
</body>
</html>