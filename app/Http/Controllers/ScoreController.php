<?php

namespace App\Http\Controllers;

use App\Match;
use App\Player;
use App\Score;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $match = Match::where('status','running')->first();

        $score = $match->match_score;
        $bat1 = Player::find($score['bat1']);
        $bat1performs = $bat1->performs_batting->where('match_id',$match['id'])->first();
        $bat2 = Player::find($score['bat2']);
        $bat2performs = $bat2->performs_batting->where('match_id',$match['id'])->first();

        $bowler = Player::find($score['bowler']);
        $bowlerperforms = $bowler->performs_bowling->where('match_id',$match['id'])->first();


        return view('user_score',compact('score','bat1','bat2','bowler','bat1performs','bat2performs','bowlerperforms'));


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
