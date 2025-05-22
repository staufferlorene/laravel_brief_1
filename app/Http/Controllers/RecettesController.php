<?php

namespace App\Http\Controllers;
use App\Models\Recettes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecettesController extends Controller
{
    public function index()
    {
        $recettes = Recettes::all();
        return view('recettes.index', compact('recettes'));
    }


    public function create()
    {
        return view('recettes.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

     /*   Recettes::create($request->all());*/

        DB::table('recettes')->insert([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('recettes.index')->with('success', 'Recette created successfully.');
    }

        public function edit(Recettes $recette)
    {
        return view('recettes.edit', compact('recette'));
    }



    public function update(Request $request, Recettes $recette)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

     /*   $recette->update($request->all());*/

        DB::table('recettes')->where('id', $recette->id)->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('recettes.index')->with('success', 'Recette mise à jour avec succès.');
    }


    public function destroy(Recettes $recette)
    {
        $recette->delete();
        return redirect()->route('recettes.index')->with('success', 'Recette supprimée avec succès.');
    }
}
