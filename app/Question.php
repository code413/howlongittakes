<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Question extends Model
{

    use Searchable;

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function subscribe()
    {
        return $this->hasOne(Subscribe::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function average()
    {
        $answers = [];
        foreach ($this->answers->pluck('value') as $answer){
            $answers[] =$answer;
        }
        $average = round( array_sum($answers) / count($answers));
        return $average;
    }

    public function bestAnswer()
    {
        return 1;
    }

    public function isApproved()
    {
        return $this->approved === 1;
    }

    public function shouldBeSearchable()
    {
        return $this->isApproved();
    }


    public function isAnswered(){
        return $this->answers->count() > 0;
    }


    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['is_answered'] = $this->isAnswered();
        $array['best_answer'] = $this->bestAnswer();

        return $array;
    }
}
