<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(): View
    {
        return view('teams.list', [
            'teams' => Team::all(),
        ]);
    }

    public function edit(Team $team): View
    {
        return view('teams.edit', [
            'users' => User::all(),
            'team' => $team,
        ]);
    }

    public function addMembers(Request $request, Team $team): RedirectResponse
    {
        $this->validate($request, []);
        $team->users()->syncWithoutDetaching($request->ids);

        return redirect(route('teams.edit', $team))
            ->with('success', 'Membros adicionados com sucesso');
    }

    public function removeMembers(Request $request, Team $team): RedirectResponse
    {
        $this->validate($request, []);
        $team->users()->detach($request->ids);

        return redirect(route('teams.edit', $team))
            ->with('success', 'Membros removidos com sucesso');
    }
}
