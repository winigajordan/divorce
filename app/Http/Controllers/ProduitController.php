<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        //$produits = Produit::all();
        $produits = Produit::paginate(5);
        return view('produits.index', compact('produits'));
    }

    public function save(ProduitRequest $request)
    {
        //dd($request);

        $nom = $request->input('nom');
        $description = $request->input('description');
        $prix = $request->input('prix');
        $enfant = $request->input('enfant')=="on" ? true : false ;
        $accord = $request->input('accord')=="on" ? true : false;
        $bien = $request->input('bien')=="on" ? true : false;

        // Save the produit in the database
        Produit::create([
            'nom' => $nom,
            'description' => $description,
            'prix' => $prix,
            'enfant' => $enfant,
            'accord' => $accord,
            'bien' => $bien
        ]);



        
       /*  return redirect()->route('produit.index')
            ->with('success', 'Produit créé avec succès.'); */


        return redirect()->route('produit.index')
            ->with('success', 'Produit créé avec succès.');
    }

    public function show($id)
    {
        $produit = Produit::find($id);

        if ($produit == null) {
            return redirect()->route('produit.index');
        }
       // dd($produit);
        return  view('produits.show', compact('produit'));
    }

    public function edit($id)
    {
        $produit = Produit::find($id);

        if ($produit == null) {
            return redirect()->route('produit.index');
        }

        return view('produits.edit', compact('produit'));

    }

    public function update(ProduitRequest $request, Produit $prod){
        $nom = $request->input('nom');
        $description = $request->input('description');
        $prix = $request->input('prix');
        $enfant = $request->input('enfant')=="on" ? true : false ;
        $accord = $request->input('accord')=="on" ? true : false;
        $bien = $request->input('bien')=="on" ? true : false;

        $prod->update([
            'nom' => $nom,
            'description' => $description,
            'prix' => $prix,
            'enfant' => $enfant,
            'accord' => $accord,
            'bien' => $bien
        ]);

        return redirect()->route('produit.index')
            ->with('success', 'Produit modifié avec succès.');

    }


    public function delete($id)
    {
        $produit = Produit::find($id);

        if ($produit == null) {
            return redirect()->route('produit.index');
        }

        $produit->delete();

        return redirect()->route('produit.index')
            ->with('success', 'Produit supprimé avec succès.');
    }


    public function trash()
    {
        $produits = Produit::onlyTrashed()->get();
        return view('produits.trash', compact('produits'));
    }

    public function restore($id)
    {
        $produit = Produit::onlyTrashed()->find($id);

        if ($produit == null) {
            return redirect()->route('produit.index');
        }

        $produit->restore();

        return redirect()->route('produit.index')
            ->with('success', 'Produit restauré avec succès.');
    }

    public function forcedelete($id)
    {
        $produit = Produit::onlyTrashed()->find($id);

        if ($produit == null) {
            return redirect()->route('produit.index');
        }

        $produit->forceDelete();

        return redirect()->route('produit.index')
            ->with('success', 'Produit supprimé définitivement avec succès.');
    }

    /*
    public function create()
    {
        return view('produit.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'enfant' => 'required',
            'accord' => 'required',
        ]);

        Produit::create($request->all());

        return redirect()->route('produit.index')
            ->with('success', 'Produit créé avec succès.');
    }

    public function edit(Produit $produit)
    {
        return view('produit.edit', compact('produit'));
    }

    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'prix' => 'required',
            'enfant' => 'required',
            'accord' => 'required',
        ]);

        $produit->update($request->all());

        return redirect()->route('produit.index')
            ->with('success', 'Produit modifié avec succès.');
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('produit.index')
            ->with('success', 'Produit supprimé avec succès.');
    }
    */
}
