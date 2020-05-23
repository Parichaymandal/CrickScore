<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name','description'
    ];

    public function tournament_team()
    {
        return $this->belongsTo('App\Tournament','tournament_id');
    }

    public function play()
    {
        return $this->belongsTo('App\Match','match_id');
    }

    public function join()
    {
        return $this->hasMany('App\Player','team_id');
    }

    public function team_score()
    {
        return $this->hasMany('App\Score','team_id');
    }


}
