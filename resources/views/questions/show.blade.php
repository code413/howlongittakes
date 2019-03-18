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
         style="min-height:calc(100vh - 40rem); padding: 10rem 2rem ;">
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
            <a class="nav-link {{ ($question->answers()->selected()->count() > 0 ? 'active' : '')}}" data-toggle="tab"
               href="#references">Selected references <strong
                        class="ml-4">{{$question->answers()->selected()->count()}}</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#other-answers">All Answers <strong
                        class="ml-4">{{$question->answers()->approved()->count()}}</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($question->answers()->selected()->count() < 1 ? 'active' : '')}}" data-toggle="tab"
               href="#new-answer">Submit Your Answer</a>
        </li>
    </ul>
    <div class="details py-5" style="min-height: 40rem;">
        <div class="container tab-content">
            <div id="references" class="tab-pane {{ ($question->answers()->selected()->count() > 0 ? 'active' : '')}}"
                 role="tabpanel">
                @foreach($question->answers()->selected()->get() as $answer)

                    <div class="row mb-4 mb-md-2">
                        <div class="col-12 col-md-6">
                            <a href="{{ $answer->url }}" target="_blank">{{ str_limit($answer->url, 50) }}</a>
                        </div>

                        @if($question->isAverage)
                            <div class="col-6 col-md-3 text-primary">
                                {{ $answer->average_value }}

                                @if($answer->average_value > 1)
                                    {{ Illuminate\Support\Str::plural($answer->unit->name) }}
                                @else
                                    {{ $answer->unit->name }}
                                @endif

                            </div>
                        @elseif($question->isRange)
                            <div class="col-6 col-md-3 text-primary">
                                {{ $answer->min_value }} to {{ $answer->max_value }}

                                @if($answer->max_value > 1)
                                    {{ Illuminate\Support\Str::plural($answer->unit->name) }}
                                @else
                                    {{ $answer->unit->name }}
                                @endif

                            </div>
                        @endif

                        <small class="col-6 col-md-3 text-right text-muted">Added {{ $answer->created_at->diffForHumans() }}</small>
                    </div>





                @endforeach
            </div>

            <div id="other-answers" class="tab-pane" role="tabpanel">
                @foreach($question->answers()->approved()->get() as $answer)
                    <div class="row mb-2">
                        <div class="col-6">
                            <a href="{{ $answer->url }}" target="_blank">{{ str_limit($answer->url, 50) }}</a>
                        </div>

                        @if($question->isAverage)
                            <div class="col-6 col-md-3 text-primary">
                                {{ $answer->average_value }}

                                @if($answer->average_value > 1)
                                    {{ Illuminate\Support\Str::plural($answer->unit->name) }}
                                @else
                                    {{ $answer->unit->name }}
                                @endif

                            </div>
                        @elseif($question->isRange)
                            <div class="col-6 col-md-3 text-primary">
                                {{ $answer->min_value }}
                                to {{ $answer->max_value }}

                                @if($answer->max_value > 1)
                                    {{ Illuminate\Support\Str::plural($answer->unit->name) }}
                                @else
                                    {{ $answer->unit->name }}
                                @endif
                            </div>
                        @endif

                        <small class="col-6 col-md-3 text-right text-muted">Added {{ $answer->created_at->diffForHumans() }}</small>
                    </div>
                @endforeach
            </div>

            <form class="tab-pane {{ ($question->answers()->selected()->count() < 1 ? 'active' : '')}}" id="new-answer"
                  role="tabpanel" action="{{ action('AnswersController@store', ['questionId'=>$question->id]) }}"
                  method="POST">
                @csrf


                <div class="row d-flex align-items-start">


                    @if($question->aggregation === 'average')


                        <div class="col-12 col-md-8">
                            <label>On average</label>
                            <div class="d-flex flex-column">
                                <input class="form-control mb-2 {{ $errors->has('average_value') ? ' is-invalid' : '' }}"
                                       type="number" name="average_value" step=".1">
                                @if ($errors->has('average_value'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('average_value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    @else

                        <div class="col-12 col-md-4">
                            <label>From</label>
                            <div class="d-flex flex-column">
                                <input class="form-control mb-2 {{ $errors->has('min_value') ? ' is-invalid' : '' }}"
                                       type="number" name="min_value" step=".1">
                                @if ($errors->has('min_value'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('min_value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <label>To</label>
                            <div class="d-flex flex-column">
                                <input class="form-control mb-2 {{ $errors->has('max_value') ? ' is-invalid' : '' }}"
                                       type="number" name="max_value" step=".1">
                                @if ($errors->has('max_value'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('max_value') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                    @endif


                    <div class="col-12 col-md-4">
                        <label>Unit</label>
                        <div class="d-flex flex-column flex-grow-1">
                            <select class="form-control mb-2" name="unit">
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <label>Reference</label>
                        <input class="form-control mb-2 {{ $errors->has('url') ? ' is-invalid' : '' }}" type="url"
                               name="url">
                        @if ($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                        @endif
                    </div>

                </div>


                <div class="row">
                    <div class="col">
                        <input class="btn btn-primary" type="submit" value="Submit">

                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        @include('partials.messages')
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop