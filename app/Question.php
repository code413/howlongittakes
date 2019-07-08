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
        $answers = $this->selectedAverageAnswers();

        if(count($answers) === 0)
        {
            return "false";
        }
        $average = round( array_sum($answers) / count($answers)) + 0;

        return $average;
    }

    public function rangeAnswer()
    {
        $answers = $this->selectedRangeAnswers();

        if(empty($answers)){
            return false;
        }

        $range=[
            'min'=>min($answers),
            'max'=>max($answers)
        ];

        $range=[
            'min'=>min($range['min']) + 0,
            'max'=>max($range['max']) + 0,
        ];

        return $range;
    }

    public function selectedRangeAnswers()
    {
        $answers = [];
        $min_answers = [];
        $max_answers = [];
        if(!count($this->answers))
        {
            return false;
        }

        foreach ($this->answers as $answer){
            if(!$answer->isSelected)
            {
                continue;
            }
            $min_answers[] =$answer->min_value;
            $max_answers[] =$answer->max_value;
        }
        $answers[]=$min_answers;
        $answers[]=$max_answers;

        return $answers;
    }

    public function selectedAverageAnswers()
    {
        $answers = [];
        foreach ($this->answers as $answer){
            if(!$answer->isSelected)
            {
                continue;
            }
            $answers[] =$answer->average_value;
        }

        return $answers;
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


        if($this->answers()->selected()->first()['average_value'] > 1 || $this->answers()->selected()->first()['max_value'] > 1 ){

            $unit = Str::plural($unit);

        }


        $array['has_selected'] = $this->answers()->selected()->count() > 0;
        $array['average_answer'] = $this->averageAnswer();
        $array['is_average'] = $this->isAverage;
        $array['range_answer'] = $this->rangeAnswer();
        $array['is_range'] = $this->isRange;
        $array['unit'] = $unit;

        return $array;
    }

    public function getIsRangeAttribute()
    {
        return $this->aggregation === 'range';
    }

    public function getIsAverageAttribute()
    {
        return $this->aggregation === 'average';
    }
}
