<?php

namespace App\Http\Controllers;

use App\Models\Suscriptor;
use Illuminate\Http\Request;

class SuscriptorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suscriptors = Suscriptor::paginate(5);
        return view('page.suscriptors.index')
            ->with('suscriptors',$suscriptors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar el formulario para crear un nuevo suscriptor
        return view('page.suscriptors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'email' => 'required|email|unique:suscriptors,email',
            'active' => 'nullable|boolean',
        ]);

        // Crear un nuevo suscriptor
        Suscriptor::create($validated);

        return redirect()->route('suscriptors.index')->with('success', 'Suscriptor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Suscriptor $suscriptor)
    {
        // Mostrar los detalles de un suscriptor específico
        return view('page.suscriptors.show', compact('suscriptor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suscriptor $suscriptor)
    {
        // Mostrar el formulario para editar un suscriptor existente
        return view('page.suscriptors.edit', compact('suscriptor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suscriptor $suscriptor)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'email' => 'required|email|unique:suscriptors,email,' . $suscriptor->id,
            'active' => 'nullable|boolean',
        ]);

        // Actualizar los datos del suscriptor
        $suscriptor->update($validated);

        return redirect()->route('suscriptors.index')->with('success', 'Suscriptor actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suscriptor $suscriptor)
    {
        // Eliminar el suscriptor
        $suscriptor->delete();

        return redirect()->route('suscriptors.index')->with('success', 'Suscriptor eliminado exitosamente.');
    }

    public function search(Request $request)
    {
        // Validar que se reciba un término de búsqueda
        $request->validate([
            'term' => 'required|string|max:200',
        ]);

        $term = $request->input('term');

        // Buscar los primeros 10 suscriptores que coincidan en el email
        $suscriptors = Suscriptor::where('email', 'like', '%' . $term . '%')
            ->take(10) // Limitar los resultados a los primeros 10
            ->get();

        return view('page.suscriptors.search')
            ->with('suscriptors', $suscriptors)
            ->with('term', $term);
    }
}
