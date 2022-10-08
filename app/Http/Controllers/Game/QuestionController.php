<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Questions;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function gamePage(){

        return view('game.question', [
            'question' => DB::table('questions')->inRandomOrder()->first(),
            'score' => 0,
            'level' => 1
        ]);

    }

    public function verificQuestion(Request $request){

        $question = Questions::all();
        $validation = $question->find($request->id);

        $level = $request->level;
        $score = $request->score;

        dd($level);

        if ($level == 1) {
            Score::create([
                'score' => $score,
                'user' => Auth::user()->name
            ]);
        }

        if ($request->answer == $validation->answerTrue){
            $user = Auth::user()->name;
            $id = Score::max('id');
            Score::where([
                'user' => $user,
                'id' => $id
                ])
                    ->update([
                        'score' => $score + 10,
                        ]);

        } else{
            echo "Resposta errada";
        }

        if ($level > 5) {
            return redirect()->route('homePage');
        }

        Level::create([
            'level' => $level,
            'id_user' => Auth::user()->id
        ]);

        $level++;

        return redirect()->route('gamePage', [
            'score' => $score,
            'level' => $level
        ]);
    }

}
