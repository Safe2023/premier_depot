<?php

namespace App\Http\Controllers;

use App\Mail\EnvoeMail;
use App\Models\Categorie;
use App\Models\Contact;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       //
    }

    public function envoiedemail(Request $request)
    {
        $validateData = $request->validate([
            "prenom" => "required",
            "email" => "required",
            "objet" => "required",
            "message" => "required",
        ]);
        $contact = Contact::create($validateData);
        Mail::to('beresaf@gmail.com')->send(new EnvoeMail($request->all()));
        return redirect()->back()->with('message','votre message a bien été envoyer');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $get_category = Categorie::all();
        return view('ajouterproduit',compact('get_category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validateData=  $request->validate([
            "nom_produit" => "required",
           
            "description_produit" => "required",
            "image_produit" => "required",
            "prix_produit" => "required",
           "categorie_id" => "required|exists:categories,id",

        ]);
       
        $data = Produit::create($validateData);
        
        if ($data) {
            # code...
            return redirect()->back()->with('success', 'Le produit à bien été ajouter');
        } else {
            return redirect()->back()->with('erreur', 'Le produit n\'a pas bien été ajouter');
        }
    }




    // categorie

    public function create_category()
    {
        
        return view('ajoutercategorie');
    }


    public function ajoutercategoerie(Request $request)
    {

        $validateData = $request->validate([
            "Nom_categorie" => "required",
        ]);
       
        Categorie::create($validateData);
   
        return redirect()->back()->with('success', 'categorie ajouter');
    }

    public function listeproduit()
    {
        $listeproduit = Produit::orderBy('created_at', 'desc')->get();
        $get_category_femme = Produit::with('categorie')->where('categorie_id','Femme')->get();
        $get_category_enfant = Produit::with('categorie')->where('categorie_id','Enfant')->get();
        return view('listeproduit', compact('get_category_homme','get_category_femme','get_category_enfant'),['listeproduit' => $listeproduit]);
    }

    public function tableau()
    {
        $get_category = Categorie::all();
        $tableau = Produit::all();
        return view('tableau', [
            'tableau' => $tableau,
            'get_category' => $get_category,
        ]);
    }

    public function get_category()
    {
      

        return view('tableau');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = Produit::findOrFail($id);
        return view('modifier', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nom_produit" => "required",
            "categorie" => "required",
            "description_produit" => "required",
            "image_produit" => "required",
            "prix_produit" => "required",
        ]);
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
        return redirect()->back()->with('success', 'produits modifier!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produit  = Produit::findOrFail($id);
        $produit->delete();
        return redirect()->back()->with('success', 'produits Supprimer!!!');
    }
}
