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
            'average_value' => 'required_without:min_value',
            'min_value' => 'required_without:average_value',
            'max_value' => 'required_without:average_value',
            'unit' => 'required',
            'url' => 'required|url',
        ],
            [
                'required_without' => 'The value is required.'
            ]);


        $answer = new Answer;

        $answer->question_id = $request->get('questionId');
        $answer->average_value = $request->get('average_value');
        $answer->min_value = $request->get('min_value');
        $answer->max_value = $request->get('max_value');
        $answer->unit_id = $request->get('unit');
        $answer->url = $request->get('url');

        $answer->save();

        return back()->with('message', 'Thank you for you submission. The answers will be displayed once is verified.');
    }

}
