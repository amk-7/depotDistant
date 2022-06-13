<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Personne;
use App\Models\Employe;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $request["adresse"] = array(
            "ville"=>$request->ville,
            "rue"=>$request->rue,
            "bp"=>$request->bp
        );
        echo $request->nomUtilisateure;
        //Creer une personne.
        $request["email"] = $request->email?$request->email:$request->nom.$request->prenom."@gmail.com";
        $personne=Personne::create([
            "nom"=>$request->nom,
            "prenom" => $request->prenom,
            "sexe" => "Masculin",
            "email"=>$request->email,
            "dateNaiss" => $request->dateNaiss,
            "adresse" => $request->adresse,
            "telephone"=>$request->telephone
        ]);

        if ($personne){
            echo "ok";
            //Creer l'employé correspondant aux personnes.
            $request["email"] = $request->email?$request->email:$request->nom.$request->prenom."@gmail.com";
            $employe=Employe::create([
                "nomUtilisateur"=> $request->nomUtilisateur,
                "motDePasse"=>$request->password_confirmation,
                "avatar"=> "",
                "status"=>true,
                "id_personne"=>$personne->id
            ]);
        }

        event(new Registered($employe));

        Auth::login($employe);

        return redirect(RouteServiceProvider::HOME);
    }
}
