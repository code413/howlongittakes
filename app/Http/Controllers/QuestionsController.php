<?php

namespace App\Http\Controllers;

use App\Question;
use App\Unit;
use App\User;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::where('approved', 1)->paginate(15);
        return view('questions.index', compact('questions'));
    }

    public function search(Request $request)
    {

        $questions = Question::search($request->search)->where('approved', 1)->paginate(15);

        return view('questions.index', compact('questions'));
    }

    public function show(Question $to)
    {
        $question = $to;

        $units = Unit::all();

        return view('questions.show', compact('question', 'units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::updateOrCreate(
            [
              'email'=>  $request->get('email')
            ],
            [
                'email' => $request->get('email')
            ]
        );

        $question = new Question;
        $question->content = $request->get('question');
        $question->slug = str_slug($question->content, '-');
        $question->by_user = 1;
        $question->user_id = $user->id;
        $question->save();

        return back()->with('message', 'Thank you for you submission. The question will be displayed once is verified.');

    }
}
