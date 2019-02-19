@inject('answers', 'App\Answer')


@extends('layouts.master')

@section('main.class', 'd-flex p-3 p-sm-5 flex-wrap flex-row')



@section('content')
    <section class="questions">
        <h1>How long it takes to ...</h1>

        <div id="app">
            <ais-index
                    app-id="{{ env('ALGOLIA_APP_ID') }}"
                    api-key="{{ env('ALGOLIA_SEARCH_KEY') }}"
                    index-name="questions"
            >
                <ais-search-box placeholder="Find a question..." ></ais-search-box>

                <ais-results>

                    <template slot-scope="{ result }">
                        <a :href="/to/ + result.slug">
                            <h2 v-text="result.content">
                                <ais-highlight :result="result" attribute-name="content"></ais-highlight>
                            </h2>
                        </a>
                    </template>
                </ais-results>

                <ais-no-results>
                    <template slot-scope="props">
                        No result found.
                    </template>
                </ais-no-results>

                <ais-pagination :padding="5"></ais-pagination>


            </ais-index>
        </div>
    </section>

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
    <div class="row">
        <div class="col-12">
            {{ $questions->links() }}
        </div>
    </div>


    <div class="row question-submission">
        <div class="col-12">

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
        </div>
    </div>
@stop