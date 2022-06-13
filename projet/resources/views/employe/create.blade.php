<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrer un employé</title>
    <style>
      img {
        width: 10%;
	      height: 10%;
      }
    </style>
</head>
<body>
    <div>
        <h1>Enregistrement d'un employe </h1><hr>
        <form action="{{route('enregistrementEmploye')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
          <div>
            <label for="nom">{{__('Nom Employé')}}</label>
            <input type="text" name="nom" id="" value="" class="@error('nom') is-invalid @enderror">
            @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="prenom">{{__('Prénom Employé')}}</label>
            <input type="text" name="prenom" id="" value="" class="@error('prenom') is-invalid @enderror" >
            @error('prenom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="nomUtilisateur">{{__('Nom Utilisateure')}}</label>
            <input type="text" name="nomUtilisateur" id="" value="" class="@error('nomUtilisateur') is-invalid @enderror">
            @error('nomUtilisateur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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
            <label for="numero">{{__('Numéro de téléphone')}}</label>
            <input type="tel" name="numero" id="" value="">
          </div>
          <div>
            <label for="email">{{__('Email')}}</label>
            <input type="email" name="email" id="" value="">
          </div>
          <div>
            <label for="motDePasse">{{__('Mot De Passe')}}</label>
            <input type="password" name="motDePasse" id="" value="" class="@error('nomUtilisateur') is-invalid @enderror">
            @error('nomUtilisateur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div>
            <label for="avatar">{{__('Photo de profil')}}</label>
            <input type="file" onchange="previewPicture(this)" name="avatar" id="" value="" accept="image/jpg, image/jpeg, image/png, image/jpeg"><br>
            <img src="" alt="profil" id="profil" size>
          </div>
          <div>
            <input type="submit" value="Enregister">
          </div>
          @foreach ($roles as $role)
            <div class="role_liste" id="role_liste">
              <div>
                <input type="checkbox" name="{{$role}}" id="{{$role}}">
                <label for="">{{$role}}</label>
              </div>
            </div>
          @endforeach
        </form>
    </div>
    

    <h1>Create Post</h1>
 
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  

    <script type="text/javascript">
        var image = document.getElementById("profil");
        var types = ["image/jpg", "image/jpeg", "image/png"];
        var previewPicture = function(e){
          const [picture] = e.files;
          if (types.includes(picture.type)){
            profil.src = URL.createObjectURL(picture);
          }
        }
    </script>
</body>
</html>