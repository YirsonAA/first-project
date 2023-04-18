<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
//Here the model data from the categories table is taken and injected into the views
class CategoriaController extends Controller
{
    //Get the categorias and send to categorias.index view
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
    //Show the create view
    public function create()
    {
        return view('categorias.create');
    }
    //save the category
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        Categoria::create($request->all());
        return redirect()->route('categorias.index')->with('success', 'Category create successfully.');
    }
    //Show the category data
    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }
    //Show the category edit view whit category data
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }
    //Update category data
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $categoria->update($request->all());
        return redirect()->route('categorias.index')->with('success', 'Category successfully updated.');
    }
    //Delete category
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria successfully deleted.');
    }
}
