<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class AnswersController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'value' => 'required',
            'unit' => 'required',
            'url' => 'required|url',
        ]);

        $answer = new Answer;

        $answer->question_id = $request->get('question');
        $answer->value = $request->get('value');
        $answer->unit_id = $request->get('unit');
        $answer->url = $request->get('url');

        $answer->save();

        return back()->with('message', 'Thank you for you submission. The answers will be displayed once is verified.');
    }

    public function update(Request $request)
    {
        dd($request->all());
    }
}
