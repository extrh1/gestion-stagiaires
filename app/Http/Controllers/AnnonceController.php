<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    // Liste des annonces
    public function index()
    {
        $annonces = Annonce::latest()->get();
        return view('annonces.index', compact('annonces'));
    }

    // Formulaire de création
    public function create()
    {
        return view('annonces.create');
    }

    // Enregistrer une nouvelle annonce
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:Appartement,Maison,Villa,Magasin,Terrain',
            'ville' => 'required|string|max:255',
            'superficie' => 'required|integer|min:1',
            'etat' => 'required|in:Neuf,Ancien',
            'prix' => 'required|numeric|min:0',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $photo = $request->hasFile('photo') ? $request->file('photo')->store('photos', 'public') : null;

        Annonce::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'type' => $request->type,
            'ville' => $request->ville,
            'superficie' => $request->superficie,
            'etat' => $request->etat,
            'prix' => $request->prix,
            'photo' => $photo,
        ]);

        return redirect()->route('annonces.index')->with('success', 'Annonce créée avec succès !');
    }

    // Afficher une annonce
    public function show($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonces.show', compact('annonce'));
    }

    // Formulaire d'édition
    public function edit($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('annonces.edit', compact('annonce'));
    }

    // Mettre à jour une annonce
    public function update(Request $request, $id)
    {
        $annonce = Annonce::findOrFail($id);

        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|in:Appartement,Maison,Villa,Magasin,Terrain',
            'ville' => 'required|string|max:255',
            'superficie' => 'required|integer|min:1',
            'etat' => 'required|in:Neuf,Ancien',
            'prix' => 'required|numeric|min:0',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $annonce->photo = $request->file('photo')->store('photos', 'public');
        }

        $annonce->update($request->except('photo'));

        return redirect()->route('annonces.index')->with('success', 'Annonce modifiée avec succès !');
    }

    // Supprimer une annonce
    public function destroy($id)
    {
        $annonce = Annonce::findOrFail($id);
        $annonce->delete();

        return redirect()->route('annonces.index')->with('success', 'Annonce supprimée avec succès !');
    }

    // Dashboard statistiques
    public function dashboard()
    {
        $stats = [
            'total' => Annonce::count(),
            'prix_total' => Annonce::sum('prix'),
            'prix_moyen' => Annonce::avg('prix'),
            'surface_totale' => Annonce::sum('superficie'),
        ];

        return view('annonces.dashboard', compact('stats'));
    }
}