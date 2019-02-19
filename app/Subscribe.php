<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $fillable=['email'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
