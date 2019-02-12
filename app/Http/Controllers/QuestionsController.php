<?php

namespace App\Http\Controllers;

use App\Question;
use App\Unit;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    public function show(Question $question)
    {
        $units = Unit::all();

        return view('questions.show', compact('question', 'units'));
    }
}
