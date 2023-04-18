<?php

namespace App\Http\Controllers;

use App\Models\Opcion;
use App\Models\Categoria;
use Illuminate\Http\Request;
//Here the model data from the categories table is taken and injected into the views
class OpcionController extends Controller
{
    //Get the options and categories and send to opciones.index view
    public function index()
    {
        $opciones = Opcion::with('categoria')->get();
        return view('opciones.index', compact('opciones'));
    }
    //Show the create view and send the category data
    public function create()
    {
        $categorias = Categoria::all();
        return view('opciones.create', compact('categorias'));
    }
    //save the option with the category relation data
    public function store(Request $request)
    {
        $request->validate([
            'option' => 'required',
            'category_id' => 'required|exists:categorias,id',
        ]);

        Opcion::create($request->all());
        return redirect()->route('opciones.index')->with('success', 'Opcion create successfully.');
    }
    //Show the opciones data
    public function show(Opcion $opcion)
    {
        return view('opciones.show', compact('opcion'));
    }
    //Show the opciones edit view whit category and options data
    public function edit(Opcion $opcion)
    {
        $categorias = Categoria::all();
        return view('opciones.edit', compact('opcion', 'categorias'));
    }
    //Update options data
    public function update(Request $request, Opcion $opcion)
    {
        $request->validate([
            'option' => 'required',
            'category_id' => 'required|exists:categorias,id',
        ]);

        $opcion->update($request->all());
        return redirect()->route('opciones.index')->with('success', 'Opcion successfully updated.');
    }
    //Delete opciones
    public function destroy(Opcion $opcion)
    {
        $opcion->delete();
        return redirect()->route('opciones.index')->with('success', 'Opcion successfully deleted.');
    }
}
