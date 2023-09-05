<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::paginate(6);
        return view('clients.index', ['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Ce champ est requis. Veuillez le remplir.',
        ];

        $validatedData = $request->validate([
            'nom' => 'required',
            'ice' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'email' => 'required',
            'telephone' => 'required'
        ], $messages);

        Client::create($validatedData);
        
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);
        return view('clients.show', ['client'=>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client  = Client::find($id);
        return view('clients.edit', ['client'=>$client]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Ce champ est requis. Veuillez le remplir.',
        ];

        $validatedData = $request->validate([
            'nom' => 'required',
            'ice' => 'required',
            'adresse' => 'required',
            'ville' => 'required',
            'email' => 'required',
            'telephone' => 'required'
        ], $messages);

        $client = Client::find($id);
        $client->update($validatedData);
        
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::find($id)->delete();
        return redirect()->route('clients.index')->with('page','3');
    }
}
