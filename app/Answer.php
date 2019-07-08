<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function getIsApprovedAttribute()
    {
        return $this->approved === 1;
    }

    public function scopeApproved($query)
    {
        return $query->where('approved', 1);
    }

    public function getIsSelectedAttribute()
    {
        return $this->selected === 1;
    }

    public function scopeSelected($query)
    {
        return $query->where('selected', 1);
    }
}
