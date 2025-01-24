<?php

namespace App\Http\Controllers;

use App\Models\calendar;
use Illuminate\Http\Request;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = new Collection();

        foreach(Event::all() as $event)
            $events->push($event->getFullCalendarJSFormat());

        return view('page.calendar.index')
            ->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(calendar $calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(calendar $calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, calendar $calendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(calendar $calendar)
    {
        //
    }
}
