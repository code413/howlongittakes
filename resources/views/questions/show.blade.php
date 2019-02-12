@extends('layouts.master')

@section('content')
    <h1>
        {{$question->content}}
    </h1>

    @if($question->answers->count() > 0)
        <h2>
            Best answer:<br>It
            takes {{ $question->answers->first()->value }} {{ $question->answers->first()->unit->name }}
        </h2>
        <h3>
            Other answers:
            @foreach($question->answers as $answer)
                <br>{{ $answer->value }} {{ $answer->unit->name }}
            @endforeach
        </h3>
    @endif
    <hr>
    <h4>Add an answer:</h4>
    <form method="POST" action="{{ action('AnswersController@store', ['question'=>$question->id]) }}">
        @csrf
        <input type="text" name="value">
        <select name="unit">
            @foreach($units as $unit)
                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
            @endforeach
        </select>
        <input type="url" name="url">
        <input type="submit" value="Submit">
    </form>
@stop