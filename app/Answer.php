<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question()
    {
        $this->belongsTo(Question::class);
    }

    public function unit()
    {
        $this->belongsTo(Unit::class);
    }
}
