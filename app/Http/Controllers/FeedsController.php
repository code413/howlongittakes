<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Unit;
use Illuminate\Http\Request;

class FeedsController extends Controller
{
    public function create()
    {
        return view('feeds.create');
    }

    public function store(Request $request)
    {

        $rules = [
            'aggregation' => 'required',
            'question' => 'required',
            'average-answer' => 'required_if:aggregation, average',
            'min-answer' => 'required_if:aggregation, range',
            'max-answer' => 'required_if:aggregation, range',
            'unit' => 'required',
            'url' => 'required',
        ];

        $request->validate($rules);

        $question = new Question;
        $question->content = $request->get('question');
        $question->slug = str_slug($request->get('question'));
        $question->approved = 1;
        $question->aggregation = $request->get('aggregation');
        $question->save();

        $answer = new Answer;
        $answer->question_id = $question->id;
        $answer->average_value = $request->get('average-answer');
        $answer->min_value = $request->get('min-answer');
        $answer->max_value = $request->get('max-answer');
        $answer->unit_id = Unit::where('name', '=', $request->get('unit'))->first()->id;
        $answer->url = $request->get('url');
        $answer->approved = 1;
        $answer->discovered = 1;
        $answer->selected = 1;
        $answer->save();

        return redirect()->back()->with('message', 'Question and answer has been successfully submitted to the website.');
    }
}
