<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer un curl_multi_getcontent</title>
</head>
<body>
    <div>
        <h1>Enregistrement d'un client </h1><hr>
        <form action="{{route('enregistrementClient')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
          <div>
            <label for="nom">{{__('Nom')}}</label>
            <input type="text" name="nom" id="" value="" class="@error('nom') is-invalid @enderror">
            @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="prenom">{{__('Prénom')}}</label>
            <input type="text" name="prenom" id="" value="" class="@error('prenom') is-invalid @enderror" >
            @error('prenom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="sexe">{{__('Sexe')}}</label>
            <select name="sexe" id="">
              <option value="Masculin">Masculin</option>
              <option value="Féminin">Féminin</option>
            </select>
          </div>
          <div>
            <label for="dateNaiss">{{__('Date De Naissance')}}</label>
            <input type="date" name="dateNaiss" id="" value="">
          </div>
          <div>
            <h3>Adresse</h3>
            <table name="adresse">
                <tbody>
                  <td>
                    <label for="Ville">{{__('Ville')}}</label>
                    <select name="ville" id="">
                      <option value="Sokode">Sokode</option>
                      <option value="Kara">Kara</option>
                    </select>
                  </td>
                  <td>
                    <label for="rue">{{__('Rue')}}</label>
                    <select name="rue" id="">
                      <option value="Khomah I">Khomah I</option>
                      <option value="Khomah II">Khomah II</option>
                    </select>
                  </td>
                  <td>
                    <label for="bp">{{__('Boit Postale')}}</label>
                    <select name="bp" id="">
                      <option value="BP 5432">BP 5432</option>
                      <option value="BP 3333">BP 3333</option>
                    </select>
                  </td>
                </tbody>
            </table>
          </div>
          <br>
          <div>
            <label for="email">{{__('Email')}}</label>
            <input type="email" name="email" id="" value="">
          </div>
          <div>
            <label for="telephone">{{__('Numéro de téléphone')}}</label>
            <input type="tel" name="telephone" id="" value="">
          </div>
          <div>
            <input type="submit" value="Enregister">
          </div>
        </form>
    </div>
    
</body>
</html>