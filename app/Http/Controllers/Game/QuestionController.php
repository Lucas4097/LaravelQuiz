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

        $id_user = Auth::user()->id;
        if (Level::where('user_id', $id_user)->count() == 1) {

            $user = Auth::user()->id;
            $id_score = Score::max('id');
            $score = Score::where([
                'user_id' => $user,
                'id' => $id_score
            ])->first();

            $level = Level::where([
                'id' => Level::max('id'),
                'user_id' => $id_user
            ])->first();

            return view('game.question', [
                'question' => DB::table('questions')->inRandomOrder()->first(),
                'score' => $score->score,
                'level' => $level->level
            ])->with('success', 'Progresso restaurado!');
        }

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

        $user = Auth::user()->id;
        $id_user = Auth::user()->id;

        if ($level == 1) {
            Score::create([
                'score' => $score,
                'user_id' => $id_user
            ]);

            Level::create([
                'level' => $level,
                'user_id' => $user
            ]);
        }

        if ($request->answer == $validation->answerTrue){
            $score = $score + 10;
            $id_score = Score::max('id');
            Score::where([
                'user_id' => $user,
                'id' => $id_score
                ])->update([
                        'score' => $score,
                        ]);

        }

        if ($level >= 5) {
            Level::where(['user_id' => $id_user])->delete();
            return redirect()->route('endgamePage');
        }

        $level++;
        $id_level = Level::max('id');
        Level::where([
            'user_id' => $id_user,
            'id' => $id_level
            ])->update([
                    'level' => $level,
                    ]);

        return view('game.question', [
            'question' => DB::table('questions')->inRandomOrder()->first(),
            'score' => $score,
            'level' => $level
        ]);
    }

}
