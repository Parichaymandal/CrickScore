<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'status','resuts'
    ];

    public function fixture()
    {
        return $this->belongsTo('App\Tournament','tournament_id');
    }

    public function play()
    {
        return $this->hasMany('App\Team','match_id');
    }

    public function match_score()
    {
        return $this->hasOne('App\Score','match_id');
    }

    public function player_performs_batting()
    {
        return $this->hasMany('App\BattingPerformance','match_id');
    }

    public function player_performs_bowling()
    {
        return $this->hasMany('App\BowlingPerformance','match_id');
    }


}
