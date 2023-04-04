<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', ['characters' => $characters]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mag = rand(0, 14);
        $for = rand(0, 14);
        $agi = rand(0, 14);
        $int = rand(0, 14);
        $pv = rand(20, 50);
        return view('characters.create', compact('mag', 'for', 'agi', 'int', 'pv'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'speciality' => 'required|string',
        ]);

        $character = new Character;
        $character->name = $validatedData['name'];
        $character->description = $validatedData['description'];
        $character->speciality = $validatedData['speciality'];
        $character->user_id = auth()->user()->id;
        $character->mag = random_int(0, 14);
        $character->for = random_int(0, 14);
        $character->agi = random_int(0, 14);
        $character->int = random_int(0, 14);
        $character->pv = random_int(20, 50);
        $character->save();

        // Rediriger l'utilisateur vers une page de confirmation
        return redirect()->route('characters.index')->with('success', 'Le personnage a été créé avec succès!');
    }
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Récupérer le personnage à supprimer
        $character = Character::findOrFail($id);

        // Vérifier que l'utilisateur peut supprimer le personnage
        if ($character->user_id != auth()->user()->id) {
            abort(403, 'Vous n\'êtes pas autorisé à supprimer ce personnage.');
        }

        // Supprimer le personnage de la base de données
        $character->delete();

        // Rediriger l'utilisateur vers la page d'index des personnages
        return redirect()->route('characters.index')
            ->with('success', 'Le personnage a été supprimé avec succès.');
    }
}
