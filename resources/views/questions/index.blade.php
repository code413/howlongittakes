@extends('layouts.master')

@section('content')
    <section class="questions">
        <h1>How long it takes to ...</h1>

        <form method="POST" action="{{ action('QuestionsController@search') }}">
            @csrf
            <input type="search" name="search" value="{{ request()->has('search') ? request()->get('search') : ''}}" placeholder="Search a keyword to find the question">
        </form>

        <ul>
            @foreach($questions as $question)

                <li class="d-flex align-items-center">
                    <a href="{{ action('QuestionsController@show', ['question'=>$question->slug]) }}">
                        <h2>{{$question->content}}</h2>
                    </a>
                    @if($question->answers->count() > 0)
                        <h3>{{ $question->answers->first()->value }} {{ $question->answers->first()->unit->name }}</h3>
                    @else
                        <a href="{{ action('QuestionsController@show', ['question'=>$question->slug]) }}"
                           class="badge badge-pill badge-primary">Answer it!</a>
                    @endif
                </li>

            @endforeach
        </ul>
        {{ $questions->links() }}
    </section>

    <section class="question-submission">
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
    </section>

@stop