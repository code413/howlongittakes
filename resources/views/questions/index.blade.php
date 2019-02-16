@extends('layouts.master')

@section('main.class', 'd-flex p-3 p-sm-5 flex-wrap flex-row')

@section('header')
    <input type="text" id="search" placeholder="How long it takes to..?">
@stop

@section('content')
    <div class="row">
        @foreach($questions as $question)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="{{  action('QuestionsController@show', ['question'=>$question->slug])  }}"
                   class="question card card-question mb-3 mb-sm-5" style="min-height: 15rem;">
                    <div class="card-body d-flex flex-column">
                        <h2>@include('questions.partials.content')</h2>

                        <div class="mt-auto text-right">
                            @if($question->isAnswered())
                                @include('answers.partials.short', ['answer' => $question->answers->first()])
                            @else
                                Answer now!
                            @endif
                        </div>

                    </div>
                </a>
            </div>
        @endforeach
    </div>

    {{--  <section class="question-submission">
          <form method="POST" action="{{ action('QuestionsController@store') }}">
              @csrf
              <label>Your question</label>
              <input type="text" name="question">
              <label>Your Email</label>
              <input type="email" name="email">
              <input type="submit">
              @include('partials.errors')
              @include('partials.messages')
  
          </form>
      </section>--}}

@stop