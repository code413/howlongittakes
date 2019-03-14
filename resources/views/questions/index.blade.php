@extends('layouts.master')

@section('main.class', 'd-flex p-3 p-sm-5 flex-wrap flex-row')



@section('content')
    <section class="questions" style="width: 100%">
        <h1>How long it takes to ...</h1>
        <div class="col">
            @include('partials.errors')
            @include('partials.messages')
        </div>
        <div id="search">
            <ais-index
                    app-id="{{ env('ALGOLIA_APP_ID') }}"
                    api-key="{{ env('ALGOLIA_SEARCH_KEY') }}"
                    index-name="questions"
            >
                <ais-input placeholder="Find a question..." v-on:query="updateValue"></ais-input>
                <ais-results :class="{'row': 'row'}">

                    <template slot-scope="{ result }">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <a :href="/to/ + result.slug" class="question card card-question mb-3 mb-sm-5"
                               style="min-height: 15rem;">
                                <div class="card-body d-flex flex-column">
                                    <h2>
                                        <small class="d-block text-muted">How long it takes to</small>
                                        @{{ result.content }}?
                                    </h2>
                                    <div class="mt-auto text-right">
                                        <div class="answer" v-if="result.has_selected === true">

                                            <div v-if="result.is_average">
                                                <small>on average</small>
                                                <h3 class="d-inline text-primary">@{{ result.average_answer }}
                                                    @{{  result.unit }}</h3>
                                            </div>

                                            <div v-if="result.is_range">
                                                <small>between</small>
                                                <h3 class="d-inline text-primary">@{{ result.range_answer.min }}
                                                    <span style="color: black">to</span> @{{ result.range_answer.max }}
                                                    @{{ result.unit }}</h3>
                                            </div>
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
                                    <input id="new-question" type="hidden" name="question" value="">
                                    <div class="col">
                                        <h3>No result found.<br>Submit this question to get the answer.</h3>
                                    </div>
                                    <div class="col">
                                        <label>Type your email if you wish to get the answer.</label>
                                        <br>
                                        <input class="email" type="email" name="email"
                                               placeholder="yourname@example.com">

                                    </div>
                                    <div class="col">
                                        <input type="submit">
                                    </div>


                                </form>
                            </div>
                        </div>
                    </template>
                </ais-no-results>

                <ais-pagination :padding="5"></ais-pagination>

                <ais-powered-by :class="{'text-center': 'power-by'}"></ais-powered-by>

            </ais-index>
        </div>

    </section>



@stop