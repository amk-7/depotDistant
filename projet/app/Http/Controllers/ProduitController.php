<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produits = Produit::all();
        return view("produits.index")->with("produits", $produits);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Afficher le formulaire de creation d'un produit
        return view("produits.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         *  Enregister un produit en base
         */ 
        // Verifier si le produit exist.
        
        if (Produit::exist($request['libelle'])){
            return redirect()->route("produits.create");
        }
        Produit::create([
            "libelle"=>$request["libelle"],
            "quantiteStock"=>$request["quantiteStock"],
            "prixUnitaire"=>$request["prixUnitaire"],
            "caracteristique"=>$request["caracteristique"]
        ]);
        return redirect()->route("produits.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * 
     * 
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        //
        return view("produits.edit", compact("produit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        //
        $produit->libelle = $request->libelle ;
        $produit->quantiteStock = $request->quantiteStock;
        $produit->prixUnitaire = $request->prixUnitaire;
        $produit->save();
        return redirect()->route('produits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //echo $produit->numProduit;
        $produit->delete();
        return redirect()->route('produits.index');
    }
}
