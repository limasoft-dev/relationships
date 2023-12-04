<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $dados = $this->validate($request, [
            'nome' => 'required|max:255',
            'estado' => 'required',
        ]);
        Auth::user()->projects()->create($dados);

        return redirect()->route('projects.create')->with('success', 'Projeto Criado com sucesso!');
    }
}
