@inject('answers', 'App\Answer')


@extends('layouts.master')

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

    <section class="question-submission">
        <form method="POST" action="{{ action('QuestionsController@store') }}">
            @csrf
            <label>Your question</label>
            <input type="text" name="question" required>
            <label>Your Email to track your question (Optional)</label>
            <input type="email" name="email">
            <input type="submit">
            @include('partials.errors')
            @include('partials.messages')

        </form>
    </section>

@stop