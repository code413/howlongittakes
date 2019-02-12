<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
