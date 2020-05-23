<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'run','ball','wicket','over','bat1','bat2','bowler'
    ];

    public function match_score()
    {
        return $this->belongsTo('App\Match','match_id');
    }

    public function team_score()
    {
        return $this->belongsTo('App\Team','team_id');
    }

}
