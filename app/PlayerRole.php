<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerRole extends Model
{
    protected $fillable = [
        'roll_name'
    ];

    public function choice()
    {
        return $this->hasMany('App\Player','role_id');
    }
}
