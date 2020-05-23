<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BattingPerformance extends Model
{
    protected $fillable = [
        'run','no_of_fours','no_of_sixes', 'average','bowl','oncrease'
    ];

    public function performs_batting()
    {
        return $this->belongsTo('App\Player','player_id');
    }

    public function match_performs_batting()
    {
        return $this->belongsTo('App\Match','match_id');
    }

}
