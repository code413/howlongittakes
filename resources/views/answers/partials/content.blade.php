@if($question->answers()->selected()->count() > 0)

    <div class="answer">
        According to
        <a href="#references" class="text-body dash-underline">
            {{ $question->answers()->selected()->count() }}
            references,
        </a>

        @if($question->isAverage)

            it takes on average
            <h2 class="d-inline text-primary">{{ $question->averageAnswer() }}
                @if($question->averageAnswer() > 1)
                    {{ Illuminate\Support\Str::plural($question->answers()->selected()->first()->unit->name) }}
                @else
                    {{ $question->answers()->selected()->first()->unit->name }}
                @endif
            </h2>

        @elseif($question->isRange)
            it takes between
            <h2 class="d-inline text-primary">
                {{ $question->rangeAnswer()['min'] }}
            </h2>

            to

            <h2 class="d-inline text-primary">{{ $question->rangeAnswer()['max'] }}
                @if($question->rangeAnswer()['max'] > 1)
                    {{ Illuminate\Support\Str::plural($question->answers()->selected()->first()->unit->name) }}
                @else
                    {{ $question->answers()->selected()->first()->unit->name }}
                @endif
            </h2>

        @endif

        {{ $question->content }}.
    </div>
@else
    <div class="answer">
        <h2>No answer has been selected as the best answer!<br>Submit your answer with a reliable reference.</h2>
    </div>
@endif