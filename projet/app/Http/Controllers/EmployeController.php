<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Personne;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employes = Employe::all();
        return view('employe.index')->with("employes",$employes );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //:::: Récupérer tous les roles de la base de donnée.
        $roles = Role::all()->pluck('name');
        return view('employe.create')->with("roles", $roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nomUtilisateur' => 'required|unique:employes|max:7',
            'motDePasse' => 'required|max:30|min:8'
        ]);

        $request["adresse"] = array(
            "ville"=>$request->ville,
            "rue"=>$request->rue,
            "bp"=>$request->bp
        );
        //Creer une personne.
        $personne=Personne::create([
            "nom"=>$request->nom,
            "prenom" => $request->prenom,
            "sexe" => $request->sexe,
            "dateNaiss" => $request->dateNaiss,
            "adresse" => $request->adresse,
            "telephone"=>$request->numero
        ]);
        // Récupérer l'image.
        $image = $request->file('avatar');
        // Stocker l'image
        $chemin_image = $image->storeAs('profils', $request->nomUtilisateur.'.'.$image->extension());

        if ($personne){
            //Creer l'employé correspondant aux personnes.
            $request["email"] = $request->email?$request->email:$request->nom.$request->prenom."@gmail.com";
            Employe::create([
                "nomUtilisateur"=> $request->nomUtilisateur,
                "email"=>$request->email,
                "motDePasse"=>$request->motDePasse,
                "avatar"=> $chemin_image,
                "status"=>true,
                "personne_id"=>$personne->id
            ]);
        }
        
        return redirect()->route('employe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        //
        return view('employe.edite');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        //
    }
}
