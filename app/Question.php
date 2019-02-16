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
    
    public function isAnswered(){
        return $this->answers->count() > 0;
    }
}
