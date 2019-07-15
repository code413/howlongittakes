<?php

namespace App\Http\Controllers;

use App\Question;
use App\Subscribe;
use App\Unit;
use App\User;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function index()
    {
        return view('questions.index', compact('questions'));
    }

    public function show(Question $question)
    {
        $units = Unit::all();

        $descriptionAnswer = 'How long it takes ' . $question->content . '?';

        if ($question->isAnswered()) {
            if ($question->isAverage) {
                $descriptionAnswer = 'How long it takes ' . $question->content . '? it takes on average ' . $question->averageAnswer() . ' ' . $question->answers()->selected()->first()->unit->name . '(s).';
            } elseif ($question->isRange) {
                $descriptionAnswer = 'How long it takes ' . $question->content . '? it takes between ' . $question->rangeAnswer()['min'] .
                    ' to ' . $question->rangeAnswer()['max'] . ' ' . $question->answers()->selected()->first()->unit->name . '(s).';
            }
        }

        return view('questions.show', compact('question', 'units', 'descriptionAnswer'));
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


        return back()->with('message', 'Thank you for you submission. The question will be listed once is verified.');

    }
}
