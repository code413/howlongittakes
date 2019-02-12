@extends('layouts.master')

@section('content')
    <ul>
        @foreach($questions as $question)
            <li>
                <a href="{{ action('QuestionsController@show', ['question'=>$question->slug]) }}">{{$question->content}}</a>
            </li>
        @endforeach
    </ul>
@stop