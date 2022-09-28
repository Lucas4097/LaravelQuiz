<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Questions;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        return view('admin.dashboard');
    }

    public function dashboardCreatePage()
    {
        return view('admin.create');
    }

    public function dashboardEditPage()
    {
        return view('admin.edit');
    }

    public function viewQuestions(){
        return view('admin.dashboard', ['question' => Questions::all()]);
    }

    public function createQuestions(Request $request)
    {
        Questions::create([
            'question' => $request->question,
            'answer1' => $request->answer1,
            'answer2' => $request->answer2,
            'answer3' => $request->answer3,
            'answer4' => $request->answer4,
            'answerTrue' => $request->answerTrue
        ]);
    }
}

