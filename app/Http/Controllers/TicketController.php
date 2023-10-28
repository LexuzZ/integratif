<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = Ticket::orderBy('created_at', 'DESC')->get();

        return view('tickets.index', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ticket::create($request->all());

        return redirect()->route('tickets')->with('success', 'Ticket added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::findOrFail($id);

        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::findOrFail($id);

        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->update($request->all());

        return redirect()->route('tickets')->with('success', 'ticket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->delete();

        return redirect()->route('tickets')->with('success', 'ticket deleted successfully');
    }
}
