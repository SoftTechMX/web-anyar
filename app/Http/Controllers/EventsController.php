<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all(); // Obtener todos los eventos
        return view('page.event.index', compact('events')); // Retorna una vista con los eventos
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.event.create'); // Retorna la vista para crear un evento
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'date'        => 'required|date',
        ]);

        Event::create($validated); // Crea un nuevo evento con los datos validados

        return redirect()->route('events.index')->with('success', 'Evento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('page.event.show', compact('event')); // Retorna una vista con los detalles de un evento
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('page.event.edit', compact('event')); // Retorna la vista para editar un evento
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'date'        => 'required|date',
        ]);

        $event->update($validated); // Actualiza el evento con los datos validados

        return redirect()->route('events.index')->with('success', 'Evento actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete(); // Elimina el evento

        return redirect()->route('events.index')->with('success', 'Evento eliminado exitosamente.');
    }
}
