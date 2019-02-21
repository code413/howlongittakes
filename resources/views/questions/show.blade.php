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
    <div class="landing d-flex flex-column flex-grow justify-content-center align-items-center text-center"
         style="min-height:calc(100vh - 30rem); padding: 10rem 2rem ;">
        <div class="align-items-center justify-content-center">
            <h1>
                How long it takes to {{$question->content}}?
            </h1>
        </div>

        @if($question->answers->count() > 0)
            @include('answers.partials.content', ['answer' => $question->answers->first()])
        @else
            <h2>Submit your answer with a reliable reference now.</h2>
        @endif

    </div>

    <ul class="nav nav-tabs justify-content-center" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ ($question->answers()->selected()->count() > 0 ? 'active' : '')}}" data-toggle="tab" href="#references">Selected references <strong
                        class="ml-4">{{$question->answers()->selected()->count()}}</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#other-answers">All Answers <strong
                        class="ml-4">{{$question->answers()->approved()->count()}}</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($question->answers()->selected()->count() < 1 ? 'active' : '')}}" data-toggle="tab" href="#new-answer">Submit Your Answer</a>
        </li>
    </ul>
    <div class="details py-5" style="min-height: 40rem;">
        <div class="container tab-content">
            <div id="references" class="tab-pane {{ ($question->answers()->selected()->count() > 0 ? 'active' : '')}}" role="tabpanel">
                @foreach($question->answers()->selected()->get() as $answer)
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
                @foreach($question->answers()->approved()->get() as $answer)
                    <div class="row mb-2">
                        <div class="col-6"><a href="{{ $answer->url }}"
                                              target="_blank">{{ str_limit($answer->url, 50) }}</a></div>
                        <div class="col-3 text-primary">{{ $answer->value }} {{ $answer->unit->name }}s</div>
                        <small class="col-6 col-md-3 text-right text-muted">Added 5 days ago</small>
                    </div>
                @endforeach
            </div>

            <form class="tab-pane {{ ($question->answers()->selected()->count() < 1 ? 'active' : '')}}" id="new-answer" role="tabpanel">
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