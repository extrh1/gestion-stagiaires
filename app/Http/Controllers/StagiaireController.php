<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('stagiaire.index',compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stagiaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Stagiaire::create($request->all());
        return redirect()->route('stagiaire.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        return view('stagiaire.show',compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        return view('stagiaire.edit',compact('stagiaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->update($request->all());
        return redirect()->route('stagiaire.index');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->delete();
        return redirect()->route('stagiaire.index');
    }
}
