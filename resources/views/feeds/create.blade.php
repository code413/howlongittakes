@extends('layouts.master')

@section('main.class', 'flex-column flex-grow align-items-center justify-content-center question-show')


@section('content')
    <div class="container d-flex flex-column flex-grow justify-content-center align-items-center text-center"
         style="padding: 10rem 2rem ;">
        <div class="align-items-center justify-content-center">
            <h1>
                Enter the question and the answer.
            </h1>
            <form method="POST" action="{{ action('FeedsController@store') }}" class="mt-5">
                @csrf

                <select name="aggregation" id="feed-aggregation">
                    <option value="average">Average answered</option>
                    <option value="range">Range answered</option>
                </select>

                <div class="row m-4 flex-column">
                    <label for="feed-question">Question</label>
                    <input id="feed-question" type="text" name="question" class="w-100 p-2">
                </div>

                <div class="row m-4 flex-column" id="average-answer">
                    <h2>Average answer</h2>

                    <div>
                        <label for="feed-average-answer">Average</label>
                        <input id="feed-average-answer" type="number" step=".01" name="average-answer"
                               class="w-100 p-2">
                    </div>
                </div>

                <div class="row m-4 flex-column d-none" id="range-answer">
                    <h2>Range answer</h2>

                    <div class="d-flex">
                        <label class="mr-2">Min</label>
                        <input type="number" step=".01" name="min-answer" class="w-100 p-2" disabled>

                        <label class="mr-2 ml-4">Max</label>
                        <input type="number" step=".01" name="max-answer" class="w-100 p-2" disabled>
                    </div>
                </div>

                <div class="row m-4 flex-column">
                    <h2>Unit</h2>
                    <div>
                        <select name="unit">
                            <option value="day">Day</option>
                            <option value="century">Century</option>
                            <option value="decade">Decade</option>
                            <option value="hour">Hour</option>
                            <option value="minute">Minute</option>
                            <option value="month">Month</option>
                            <option value="season">Season</option>
                            <option value="second">Second</option>
                            <option value="semester">Semester</option>
                            <option value="solar cycle">Solar cycle</option>
                            <option value="year">Year</option>
                            <option value="week">Week</option>
                        </select>
                    </div>
                </div>

                <div class="row m-4 flex-column">
                    <h2>Reference url</h2>
                    <div>
                        <input type="text" name="url" class="w-100 p-2">
                    </div>
                </div>

                <div class="row m-4 flex-column">
                    <input class="btn btn-success" type="submit" value="Submit">
                </div>
            </form>
            @include('partials.messages')
            @include('partials.errors')

        </div>
@stop
