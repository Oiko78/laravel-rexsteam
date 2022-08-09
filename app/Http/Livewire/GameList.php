<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class GameList extends Component {
    public $search;
    protected $queryString = ['search'];

    public function render() {
        $games = Game::latest()->paginate(8);

        if ($this->search !== null) {
            $games = Game::where('name', 'like', '%' . $this->search . '%')->latest()->paginate(8);
        }

        return view('livewire.game-list', ["games", $games]);
    }
}
