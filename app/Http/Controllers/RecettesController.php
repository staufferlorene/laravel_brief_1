<?php

namespace App\Http\Controllers;
use App\Models\Recettes;

use Illuminate\Http\Request;

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

        Recettes::create($request->all());
        return redirect()->route('recettes.index')->with('success', 'Recette created successfully.');
    }

        public function edit(Recette $recettes)
    {
        return view('recettes.edit', compact('recettes'));
    }



    public function update(Request $request, Recette $recettes)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $recettes->update($request->all());
        return redirect()->route('recettes.index')->with('success', 'Task updated successfully.');
    }


    public function destroy(Recette $recettes)
    {
        $recettes->delete();
        return redirect()->route('recettes.index')->with('success', 'Task deleted successfully.');
    }
}
