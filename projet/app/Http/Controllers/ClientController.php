<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Personne;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("client.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*$request->validate([
            'nom' => 'required|unique:employes|max:7'
        ]);

        $request["adresse"] = array(
            "ville"=>$request->ville,
            "rue"=>$request->rue,
            "bp"=>$request->bp
        );
        // si l'email n'exist pas on en crée une nouvelle.
        $request["email"] = $request->email?$request->email:$request->nom.$request->prenom."@gmail.com";

        //Creer une personne.
        $personne=Personne::create([
            "nom"=>$request->nom,
            "prenom" => $request->prenom,
            "sexe" => $request->sexe,
            "email" => $request->email,
            "dateNaiss" => $request->dateNaiss,
            "adresse" => $request->adresse,
            "telephone"=>$request->telephone
        ]);

        $client = Client::create([
            "typeClient" => "temporaire",
            "status" => true,
            "id_personne" => $personne->id
        ]);*/

        return "success" ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
