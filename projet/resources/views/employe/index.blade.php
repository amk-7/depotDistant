<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employées</title>
</head>
<body>
    <div>
        <table border=1>
            <thead>
                <tr>
                    <td>numEmploye</td>
                    <td>nomUtilisateur</td>
                    <td>email</td>
                    <td>motDePasse</td>
                    <td>avatar</td>
                    <td>status</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
            @forelse ( $employes as $employe)
                <tr>
                  <td>{{$employe->numEmploye}}</td>
                  <td>{{$employe->nomUtilisateur}}</td>
                  <td>{{$employe->email}}</td>
                  <td>{{$employe->motDePasse}}</td>
                  <td>{{$employe->avatar}}</td>
                  <td>{{$employe->status}}</td>
                  <td>
                    <div>
                      <!-- url('uri') -->
                      <form action="{{route('modificationEmploye', $employe)}}" method="get">
                        <input type="submit" value="Modifier">
                      </form>
                      <form action="" method="post">
                        @csrf
                        <!-- Html n'a pas de méthode delete donc on spécifie-->
                        @method('delete')
                        <input type="submit" value="Supprimer">
                      </form-->
                    </div>
                  </td>
                </tr>
                @empty
                <span> Aucun employées </span>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>