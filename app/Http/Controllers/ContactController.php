<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->contact) {

            return view('contact.edit', [
                'contact' => Auth::user()->contact,
            ]);    // code...
        } else {
            return view('contact.create');
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $this->validate($request, [
            'phone' => 'required|digits:9',
            'address' => 'required|string|max:255',
        ]);

        auth()->user()->contact()->create($dados);

        return redirect(route('contact.create'))->with('success', 'Contactos alterados com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = $this->validate($request, [
            'phone' => 'required|digits:9',
            'address' => 'required|string|max:255',
        ]);

        auth()->user()->contact()->update($dados);

        return redirect(route('contact.create'))->with('success', 'Contactos alterados com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
