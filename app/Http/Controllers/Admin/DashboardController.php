<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Question\Question;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $search = request('search');

        if ($search) {
            $question = Questions::where('question', 'LIKE', '%'. $search . '%')
                ->where('answer1', 'LIKE', '%'. $search . '%')
                ->where('answer2', 'LIKE', '%'. $search . '%')
                ->where('answer3', 'LIKE', '%'. $search . '%')
                ->where('answer4', 'LIKE', '%'. $search . '%')
                ->get();
        } else {
            $question = Questions::all();
        }
        return view('admin.dashboard', ['question' => $question, 'search' => $search]);
    }

    public function dashboardCreatePage()
    {
        return view('admin.create');
    }

    public function dashboardEditPage($id)
    {
        return view('admin.edit', ['question' => Questions::where('id', $id)->get()]);
    }

    public function createQuestions(Request $request)
    {

        $request->validate([
            'question' => 'required',
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'nullable',
            'answer4' => 'nullable',
            'answerTrue' => 'required'
        ]);

        Questions::create($request->all());

        return redirect()->route('dashboardCreatePage')
            ->with('success', 'Questão cadastrada com sucesso!');

    }

    public function editQuestions(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer1' => 'required',
            'answer2' => 'required',
            'answer3' => 'nullable',
            'answer4' => 'nullable',
            'answerTrue' => 'required'
        ]);

        Questions::find($request->id)->update($request->all());

        return redirect()->route('dashboardEditPage', $request->id)
            ->with('success', 'Questão editada com sucesso!');
    }

    public function deleteQuestions($id)
    {
        Questions::find($id)->delete();

        return redirect()->route('dashboardPage')
            ->with('success', 'Pergunta excluida com sucesso');
    }
}

