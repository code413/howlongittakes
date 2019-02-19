<?php

namespace App\Http\Controllers;

use App\Question;
use App\Subscribe;
use App\Unit;
use App\User;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

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
            'email' => 'nullable|email'
        ]);


        $question = new Question;
        $question->content = $request->get('question');
        $question->slug = str_slug($question->content, '-');
        $question->by_user = 1;
        $question->save();

        if (!is_null($request->get('email'))) {
            $subscribe = new Subscribe;
            $subscribe->email = $request->get('email');
            $subscribe->question_id = $question->id;
            $subscribe->save();
        }


        return back()->with('message', 'Thank you for you submission. The question will be displayed once is verified.');

    }
}
