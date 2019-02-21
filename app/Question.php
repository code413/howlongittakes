<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
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

    public function averageAnswer()
    {
        $answers = [];
        foreach ($this->answers as $answer){
            if(!$answer->isSelected)
            {
                continue;
            }
            $answers[] =$answer->value;
        }

        if(count($answers) === 0)
        {
            return "false";
        }
        $average = round( array_sum($answers) / count($answers));

        return $average;
    }

    public function rangeAnswer()
    {

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

        $unit = Unit::find($this->answers()->selected()->first()['unit_id'])['name'];

        $array['has_selected'] = $this->answers()->selected()->count() > 0;
        $array['average_answer'] = $this->averageAnswer();
        $array['unit'] = $unit;

        return $array;
    }
}
