<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getPlayers(Request $request): Collection
    {
        return Player::all();
    }

    public function addPlayer(Request $request)
    {
        $player = new Player();
        $player->name = $request->get('name');
        $player->save();
    }

    public function deletePlayer(Request $request, int $id)
    {
        $player = Player::where('id', $id)->first();
        $player->delete();
    }

    public function getGames(Request $request)
    {
        return Game::all();
    }

    public function addGame(Request $request)
    {
        $game = new Game();
        $game->player1 = $request->get('player1');
        $game->player2 = $request->get('player2');
        $game->player3 = $request->get('player3');
        $game->player4 = $request->get('player4');

        $game->score1 = $request->get('score1');
        $game->score2 = $request->get('score2');

        $game->save();
    }

    public function deleteGame(Request $request, int $id)
    {
        $game = Game::where('id', $id)->first();
        $game->delete();
    }
}
