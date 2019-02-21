@extends('layouts.master')

@section('main.class', 'd-flex p-3 p-sm-5 flex-wrap flex-row')



@section('content')
    <section class="questions" style="width: 100%">
        <h1>How long it takes to ...</h1>

        <div id="search">
            <ais-index
                    app-id="{{ env('ALGOLIA_APP_ID') }}"
                    api-key="{{ env('ALGOLIA_SEARCH_KEY') }}"
                    index-name="questions"
            >
                <ais-search-box placeholder="Find a question..."></ais-search-box>
                <ais-results :class="{'row': 'row'}">

                    <template slot-scope="{ result }">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a :href="/to/ + result.slug" class="question card card-question mb-3 mb-sm-5"
                               style="min-height: 15rem;">
                                <div class="card-body d-flex flex-column">
                                   <h2><small class="d-block text-muted">How long it takes to </small> @{{ result.content }}?</h2>
                                    <div class="mt-auto text-right">
                                        <div class="answer" v-if="result.is_answered === true">
                                            <small>on average</small>
                                            <h3 class="d-inline text-primary">@{{ result.best_answer }}</h3>
                                        </div>
                                        <p v-else>
                                            Answer now!
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </template>
                </ais-results>
                <ais-no-results>
                    <template slot-scope="props">
                        <div class="row question-submission">
                            <div class="col-12">

                                <form method="POST" action="{{ action('QuestionsController@store') }}">
                                    @csrf
                                    <input type="hidden" name="question">
                                    <div class="col">
                                        <h3>No result found.<br>Submit this question to get the answer.</h3>
                                    </div>
                                    <label>Type your email if you wish to get the answer.</label>
                                    <input type="email" name="email">
                                    <input type="submit">
                                    @include('partials.errors')
                                    @include('partials.messages')

                                </form>
                            </div>
                        </div>
                    </template>
                </ais-no-results>

                <ais-pagination :padding="5"></ais-pagination>


            </ais-index>
        </div>
    </section>



@stop