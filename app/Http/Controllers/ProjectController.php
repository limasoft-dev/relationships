<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index(): View
    {
        return view('projects.index', [
            'projects' => Project::all(),
        ]);
    }

    public function create(): View
    {
        return view('projects.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $dados = $this->validate($request, [
            'nome' => 'required|max:255',
            'estado' => 'required',
        ]);
        Auth::user()->projects()->create($dados);

        return redirect()->route('projects.create')->with('success', 'Projeto Criado com sucesso!');
    }

    public function edit(Project $project): View
    {
        return view('projects.edit', [
            'project' => $project,
        ]);
    }

    public function update(Request $request, Project $project): RedirectResponse
    {
        $dados = $this->validate($request, [
            'nome' => 'required|max:255',
            'estado' => 'required',
        ]);
        $project->update($dados);

        return redirect()->route('projects.my')->with('success', 'Projeto Alterado com sucesso!');
    }

    public function nomearView(Project $project): View
    {
        return view('projects.nomear', [
            'project' => $project,
            'users' => User::all(),
        ]);
    }

    public function nomearUpdate(Request $request, Project $project): RedirectResponse
    {
        $dados = $this->validate($request, [
            'user_id' => 'required',
        ]);
        $project->update($dados);

        return redirect()->route('projects.my')->with('success', 'Projeto Afeto a outro user com sucesso!');
    }

    public function myProjects(): View
    {
        //dd(Auth::user()->projects);
        return view('projects.my', [
            'projects' => Auth::user()->projects,
        ]);
    }
}
