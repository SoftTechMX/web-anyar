<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactRequest;

class ContactRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_requests = ContactRequest::paginate(5);
        return view('page.contact-request.index')
            ->with('contact_requests',$contact_requests);
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
    public function show(ContactRequest $contactRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactRequest $contactRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactRequest $contactRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactRequest $contactRequest)
    {
        //
    }
}
