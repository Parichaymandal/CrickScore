
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type = "text/css" href = "style.css">
    <style>
        body{
            background-image:url("bacground.png");
            height:1400px;
            background-repeat:repeat-x;
        }
    </style>
</head>
<body >
<div id="center">
    <div id="top">
        <img src="BackTop.png" width="100%" height="550px">
        <div id="admin_setting">
            <div id="dropdown">
                <img src="seting.png" width="40px" height="40px">
                <div id="setting-content">
                    <a  href="/admin_registration">New Registration</a>
                    <a  href="/admin_profile">Admin Profile</a>
                    <a  href="/adminlogin">Logout</a>
                </div>
            </div>
        </div>

        <div >
            <p id = "sitename">Online Cricket Scoring Board</p>
        </div>
        <img src="Social-Logo.png" id="sociallogo" height="36px" width="170px">
        <div style = "margin-top: 10px" id = "socialicon">
            <ul>
                <li><a href="http://www.youtube.com" title ="Youtube"></a></li>
                <li><a href="http://www.gmail.com" title ="Gmail"></a></li>
                <li><a href="http://www.twitter.com" title ="Twitter"></a></li>
                <li><a href="http://www.facebook.com" title ="Facebook"></a></li>
            </ul>
        </div>
        <div id="admin_inup">
            <div id="inup">Insert
                <div id="inup_content">
                    <a  href="/teamname">Team name</a>
                    <a  href="/fixture">Fixture</a>
                </div>
            </div>
            <div id="inup">Update
                <div id="inup_content">
                    <a  href="/matchevent">Match Event</a>
                    <a  href="/playerprofile">Player Profile</a>
                    <a  href="/teamhistory">Team History</a>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom">
        <img src="Backbottom.png" width="100%" height="850px">
        <p id="admin_welcome">Welcome to CricScore(Player Name)</p>
        <p id="teamlist">Insert Player Information</p>
        {!! Form::open(['route'=> 'playername.store']) !!}
        <div id="playerlist">
            {{--<form action="" method="post">--}}
                PlayerName:<input style="margin-bottom:20px" type="text" name="name" placeholder="please enter the name"><br>
                TeamName:<select style="width:240px;border-radius:4px;margin-left:15px;height:26px;margin-bottom:20px" name="team_id">
                    @foreach($teams as $team)
                        <option value="{!! $team->id !!}">{!! $team->name !!}</option>
                    @endforeach

                </select><br>
                Age:<input style="margin-left:60px;margin-bottom:20px" type="text" name="age" placeholder="please enter your Age"><br>
                Jersey No:<input style="margin-left:23px;margin-bottom:20px" type="text" name="jersy_no" placeholder="please enter your jersey no"><br>
                Player Role:<select name="role_id" style="width:240px;border-radius:4px;margin-left:15px;height:26px;margin-bottom:20px">
                @foreach($roles as $role)
                    <option value="{!! $role->id !!}">{!! $role->roll_name !!}</option>
                @endforeach

                </select><br>
                <input style="margin-left:195px" type="submit" value="submit">
                <input type="reset" value="reset">

            {{--</form>--}}
        </div>

        {!! Form::close() !!}
        <div >
            <p id = "copywrite">copyright@KU Cricket Board.com</p>
        </div>
    </div>
</div>
</body>
</html>
