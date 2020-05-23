<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name','age','jersy_no','email'
    ];

    public function join()
    {
        return $this->belongsTo('App\Team','team_id');
    }

    public function choice()
    {
        return $this->belongsTo('App\PlayerRole','role_id');
    }

    public function performs_batting()
    {
        return $this->hasMany('App\BattingPerformance','player_id');
    }

    public function performs_bowling()
    {
        return $this->hasMany('App\BowlingPerformance','player_id');
    }

}
