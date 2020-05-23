<?php

namespace App\Http\Controllers;

use App\Match;
use App\Player;
use App\Team;
use Illuminate\Http\Request;

use App\Http\Requests;
use Response;

class MatchEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $match = Match::all();
        return view('matchevent',compact('match'));
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
        //
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

    public  function score(Request $request)
    {
        $input = $request->all();
        return $input;

    }

    public function scoring(Request $request)
    {
        $data = $request->all();


        $match = Match::find($data['match_id']);

        $batting_team = Team::find($data['battingTeam']);

        foreach ($batting_team->join as $player)
        {
            $player->update(['oncrease'=>'0']);
        }

//        return $batting_team;

        $player1 = Player::find($data['batting1']);
        $player2 = Player::find($data['batting2']);







        if($data['battingradio1'] == true)
        {
            $striking = $player1;

//            return $striking;

        }

        if($data['battingradio2'] == true)
        {
            $striking = $player2;
        }

        $bowler = Player::find($data['bowler']);

        $run = $data['run'];
        $extra = $data['extra'];

        $score = $match->match_score;
        $score->update(['bat1'=>$player1['id'],'bat2'=>$player2['id'],'bowler'=>$bowler['id']]);



        //$ball = $score['ball'];



        if($extra == 1)
        {
            $ballrun = $run + $extra;


            $thisbowler = $bowler->performs_bowling->where('match_id',$match['id'])->first();
//            return $thisbowler;

            $thisbowler->update(['extra'=>$thisbowler['extra']+$ballrun,'run'=>$thisbowler['run']+$ballrun]);



            $score->update(['run'=>$score['run']+$ballrun]);



        }

        else if ($extra == 2)
        {
            $ballrun = $run;
            $ball = ($score['ball']+1);

            $over = $ball/6;
            $score->update(['run'=>$score['run']+$ballrun,'ball'=> $ball, 'over'=>$over]);

            $thisbowler = $bowler->performs_bowling->where('match_id',$match['id'])->first();
            $thisbowler->update(['extra'=>$thisbowler['extra']+$ballrun,'run'=>$thisbowler['run']+$ballrun]);

            if($ball%6 == 0)
                $thisbowler->update(['over'=>$thisbowler['over']+1]);

        }
        else
        {

            $ballrun = $run;
            $ball = ($score['ball']+1);

            $over = $ball/6;
            $score->update(['run'=>$score['run']+$ballrun,'ball'=> $ball, 'over'=>$over]);

            $thisbowler = $bowler->performs_bowling->where('match_id',$match['id'])->first();
            $thisbowler->update(['run'=>$thisbowler['run']+$ballrun]);

            if($ball%6 == 0)
                $thisbowler->update(['over'=>$thisbowler['ober']+1,'oncrease'=>'0']);

            $thisbatting = $striking->performs_batting->where('match_id',$match['id'])->first();
            $thisbatting->update(['run'=>$thisbatting['run']+$ballrun, 'bowl'=>$thisbatting['bowl']+1]);

            if ($ballrun == 4)
            {
                $thisbatting->update(['no_of_fours'=>$thisbatting['no_of_fours']+1]);

            }

            if ($ballrun == 6)
            {
                $thisbatting->update(['no_of_sixes'=>$thisbatting['no_of_sixes']+1]);

            }

        }






        return Response::json($data);


    }
}
