<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
    public function index(Request $request) {
        return view('home.index', [
            'games' => Game::latest()->filter(request(['search']))->paginate(8)
        ]);
    }

    public function show(Game $game) {
        if ($game->adult) {

            return view('game.checkage', [
                'game' => $game
            ]);
        }
        return view("game.index", [
            'game' => $game
        ]);
    }
}
