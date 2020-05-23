<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin_profile', function () {
    return view('admin_profile');
});

Route::get('/admin_registration', function () {
    return view('admin_registration');
});

Route::get('/adminedit_profile', function () {
    return view('adminedit_profile');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

//Route::get('/fixture', function () {
//    return view('fixture');
//});

//Route::get('/matchevent', function () {
//    return view('matchevent');
//});
//    ->middleware('auth');

//Route::get('/playername', function () {
//    return view('playername');
//});

Route::get('/playerprofile_update', function () {
    return view('playerprofile_update');
});

//Route::get('/playerprofile', function () {
//    return view('playerprofile');
//});

Route::get('/teamhistory_update', function () {
    return view('teamhistory_update');
});

Route::get('/teamhistory', function () {
    return view('teamhistory');
});

Route::get('/teamname', function () {
    return view('/teamname');
});


Route::get('/', function () {
    return view('/admin');
});

Route::resource('teamname','TeamnameController');
Route::resource('playername','PlayernameController');
Route::resource('playerprofile','PlayerProfileController');
Route::resource('fixture','Fixture');
Route::resource('score','ScoreController');

Route::post('scoring', 'MatchEventController@scoring');

Route::resource('matchevent','MatchEventController');

Route::get('/ajax-team1',function () {
    $cat_id = Input::get('match_id');
    $matches = \App\Match::all();
    foreach ($matches as $m)
    {
        $m->update(['status'=>'not running']);
    }
    $match = \App\Match::find($cat_id);
    $match->update(['status'=>'running']);
    $team1 = $match->play[0]->join;

    foreach ($team1 as $t)
    {
        $per = \App\BattingPerformance::create(['run'=>'0','no_of_fours'=>'0','no_of_sixes'=>'0','bowl'=>'0']);
        $perb = \App\BowlingPerformance::create(['run'=>'0','wicket'=>'0','over'=>'0','extra'=>'0']);


        $t->performs_batting()->save($per);
        $t->performs_bowling()->save($perb);

        $match->player_performs_batting()->save($per);
        $match->player_performs_bowling()->save($perb);

    }



    $team2 = $match->play[1]->join;

    foreach ($team2 as $t)
    {
        $per = \App\BattingPerformance::create(['run'=>'0','no_of_fours'=>'0','no_of_sixes'=>'0','bowl'=>'0']);
        $perb = \App\BowlingPerformance::create(['run'=>'0','wicket'=>'0','over'=>'0','extra'=>'0']);

        $t->performs_batting()->save($per);
        $t->performs_bowling()->save($perb);

        $match->player_performs_batting()->save($per);
        $match->player_performs_bowling()->save($perb);

    }

    $score = \App\Score::create(['run'=>'0','ball'=>'0','wicket'=>'0','over'=>'0']);
    $match->match_score()->save($score);

    $team = $match->play;
//    $subcategories = DB::table('main_category')->where('parent_id','=',$cat_id)->lists('name');
//    return $team;
    return Response::json([$team1,$team2,$team]);});

Route::get('/batting',function () {
    $team_id = Input::get('team_id');
    $team = \App\Team::find($team_id);
    $players = $team->join;
//    $subcategories = DB::table('main_category')->where('parent_id','=',$cat_id)->lists('name');
//    return $team;
    return Response::json($players);
});

Route::get('/scoreupdate',function () {

    $input = \Illuminate\Support\Facades\Input::get('run');
    return Response::json($input);
});





Route::get('/admin', 'HomeController@index');
