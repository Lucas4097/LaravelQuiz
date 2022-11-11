<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EndgameController extends Controller
{
    public function endgamePage()
    {
        return view('game.endgame', [
            'score' => Score::orderBy('id', 'DESC')->where('user_id', Auth::user()->id)->first()
        ]);
    }
}
