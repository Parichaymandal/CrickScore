<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BowlingPerformance extends Model
{
    protected $fillable = [
        'run','wicket','economy','over','extra','oncrease'
    ];

    public function performs_bowling()
    {
        return $this->belongsTo('App\Player','player_id');
    }

    public function match_performs_bowling()
    {
        return $this->belongsTo('App\Match','match_id');
    }


}
