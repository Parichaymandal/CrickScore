<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'champion','year','seasion'
    ];

    public function tournament_team()
    {
        return $this->hasMany('App\Team','tournament_id');
    }

    public function fixture()
    {
        return $this->hasMany('App\Match','tounament_id');
    }
}
