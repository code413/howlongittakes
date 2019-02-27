<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
    $question = App\Question::pluck('id')->toArray();
    $unit = App\Unit::pluck('id')->toArray();

    return [
        'question_id'=>$faker->randomElement($question),
        'value'=>$faker->numberBetween($min=1, $max=200),
        'unit_id'=>$faker->randomElement($unit),
        'url'=>$faker->url,
        'approved'=>$faker->boolean(100),
        'discovered'=>$faker->boolean(70),
        'selected'=>$faker->boolean(30),
    ];
});
