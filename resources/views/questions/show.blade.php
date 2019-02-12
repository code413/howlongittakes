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
                @if($answer->approved > 0)

                    <br>{{ $answer->value }} {{ $answer->unit->name }}
                    <a href="{{ $answer->url }}">({{$answer->url}})</a>
                @endif
            @endforeach
        </h3>
    @endif
    <hr>
    <h4>Add an answer with its reference:</h4>
    <form method="POST" action="{{ action('AnswersController@store', ['question'=>$question->id]) }}">
        @csrf
        <div class="row">
            <label>Value</label>
            <input type="number" name="value" required>
            <select name="unit">
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <label>Reference</label>
            <input type="url" name="url" required>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
        </div>
        <div class="row">
            @include('partials.errors')
            @include('partials.messages')
        </div>
    </form>


@stop