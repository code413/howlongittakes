<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function getIsBestAttribute()
    {
        return ($this->best_answer ===1 ? true : false);
    }
}
