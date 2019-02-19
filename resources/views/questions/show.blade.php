@extends('layouts.master')

@section('content')
    <h1>
        How long it takes to {{$question->content}}
    </h1>

    @if($question->answers->count() > 0)
        <h2>
            Best answer:<br>It takes
            @foreach($question->answers as $answer)
                {{ ($answer->isBest ? $answer->value . ' ' . $answer->unit->name . '.' : '') }}
                @endforeach
        </h2>
        <h3>
            Other answers:


            @foreach($question->answers as $answer)
                @if($answer->approved > 0)

                    <br>{{ $answer->value }} {{ $answer->unit->name }}
                    <a class="badge badge-secondary" href="{{ $answer->url }}">({{$answer->url}})</a>
                @endif
            @endforeach

            {{--Admin use only--}}
            {{--@if(Auth::check() && Auth::user()->is_admin)
                <hr>
                Select the Best Answer:

                <form method="POST" action="{{ action('AnswersController@update') }}">
                    @csrf
                    @method('PUT')
                    @foreach($question->answers as $answer)
                        @if($answer->approved > 0)
                            <div>
                                <input type="radio" name="best_answer"
                                       value="{{ $answer->id }}">{{ $answer->value }} {{ $answer->unit->name }}
                                <a class="badge badge-secondary" href="{{ $answer->url }}">({{$answer->url}})</a>
                            </div>
                        @endif
                    @endforeach
                    <input type="submit" value="Submit">
                </form>
                @endif--}}

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