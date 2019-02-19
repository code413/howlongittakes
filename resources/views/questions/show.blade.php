@extends('layouts.master')

@section('main.class', 'flex-column flex-grow align-items-center justify-content-center')

@section('header')
    <header class="p-5">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">Ask another
                    question</a>
            </li>
        </ul>
    </header>
@stop

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


        @if($question->answers->count() > 0)
            @include('answers.partials.content', ['answer' => $question->answers->first()])
        @endif


        <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#references">References <strong
                            class="ml-4">2</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#other-answers">Other Answers <strong
                            class="ml-4">9</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#new-answer">Submit Your Answer</a>
            </li>
        </ul>
        <div class="details py-5" style="min-height: 40rem;">
            <div class="container tab-content">
                <div id="references" class="tab-pane active" role="tabpanel">
                    @foreach($question->answers as $answer)
                        <div class="row mb-4 mb-md-2">
                            <div class="col-12 col-md-6"><a href="{{ $answer->url }}"
                                                            target="_blank">{{ str_limit($answer->url, 50) }}</a></div>
                            <div class="col-6 col-md-3 text-primary">{{ $answer->value }} {{ $answer->unit->name }}s
                            </div>
                            <small class="col-6 col-md-3 text-right text-muted">Added 5 days ago</small>
                        </div>
                    @endforeach
                </div>

                <div id="other-answers" class="tab-pane" role="tabpanel">
                    @foreach($question->answers as $answer)
                        <div class="row mb-2">
                            <div class="col-6"><a href="{{ $answer->url }}"
                                                  target="_blank">{{ str_limit($answer->url, 50) }}</a></div>
                            <div class="col-3 text-primary">{{ $answer->value }} {{ $answer->unit->name }}s</div>
                            <div class="col-3">Added 5 days ago</div>
                        </div>
                    @endforeach
                    @foreach($question->answers as $answer)
                        <div class="row mb-2">
                            <div class="col-6"><a href="{{ $answer->url }}"
                                                  target="_blank">{{ str_limit($answer->url, 50) }}</a></div>
                            <div class="col-3 text-primary">{{ $answer->value }} {{ $answer->unit->name }}s</div>
                            <div class="col-3">Added 5 days ago</div>
                        </div>
                    @endforeach
                </div>

                <form class="tab-pane" id="new-answer" role="tabpanel">
                    @csrf
                    <div class="form-group">
                        <label>Value</label>
                        <input class="form-control mb-2" type="number" name="value" required>
                        <select class="form-control" name="unit">
                            @foreach($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Reference</label>
                        <input class="form-control" type="url" name="url" required>
                    </div>

                    <input class="btn btn-primary" type="submit" value="Submit">
                    <div class="row">
                        @include('partials.errors')
                        @include('partials.messages')
                    </div>
                </form>
            </div>
        </div>
@stop