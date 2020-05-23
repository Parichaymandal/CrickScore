
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
                    <a  href="/playername">Player Name</a>
                </div>
            </div>
            <div id="inup">Update
                <div id="inup_content">
                    <a  href="/playerprofile">Player Profile</a>
                    <a  href="/teamhistory">Team History</a>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom">
        <img src="Backbottom.png" width="100%" height="1250px">
        <p id="admin_welcome">Welcome to CricScore(Match Event)</p>
        <p id="teamlist_event">Update match event</p>
        <div id="match_fixture">
            <form action="" method="post">
                Fixture<select id="fixtureSelect" style="width:240px;border-radius:4px;margin-left:28px;height:26px;margin-bottom:20px">
                    <option value="">Select a Match</option>

                @foreach($match as $m)
                     <option value="{!! $m['id'] !!}">{!! $m->play[0]->name !!} vs {!! $m->play[1]->name !!}</option>
                    @endforeach

                </select><br>

                Team #1:<select id="team1" style="width:240px;border-radius:4px;margin-left:15px;height:26px;margin-bottom:20px">
                    <option>Captain</option>
                </select><br>
                Team #2:<select id="team2" style="width:240px;border-radius:4px;margin-left:15px;height:26px;margin-bottom:20px">
                    <option>Captain</option>
                </select><br>
            </form>
        </div>
        <div id="match_current">
            <table>
                <caption id="match_captain">CURRENT</caption>
                <tr>
                    <th>Batting<select id="battingTeam" style="width:240px;border-radius:4px;margin-left:34px;height:26px;margin-bottom:20px">
                            <option>Select a Team</option>
                        </select></th>
                    <th>Bowling<select id="bowlingTeam" style="width:240px;border-radius:4px;margin-left:30px;height:26px;margin-bottom:20px">
                            <option>Select a Team</option>
                        </select></th>
                </tr>
                <tr>
                    <td>Player_1<select id="batting1" style="width:240px;border-radius:4px;margin-left:28px;height:26px;margin-bottom:20px">
                            <option>Select a Player</option>
                        </select>
                        <input id="battingradio1" type="radio" name="vehicle1" value="0">
                    </td>
                    <td>Baller<select id="bowler" style="width:240px;border-radius:4px;margin-left:28px;height:26px;margin-bottom:20px">
                            <option>Select a Player</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Player_2<select id="batting2" style="width:240px;border-radius:4px;margin-left:28px;height:26px;margin-bottom:20px">
                            <option>Select a Player</option>
                        </select>
                        <input id="battingradio2" type="radio" name="vehicle1" value="0">
                    </td>
                </tr>
            </table>
        </div>
        <div id="matchevent_run">
            {{--<form action="" method="post">--}}
?
                <input type="button" id="button1" value="1">
                <input type="button" id="button2" value="2">
                <input type="button" id="button3" value="3">
                <input type="button" id="button4" value="4">
                <input type="button" id="button6" value="6">
                <input type="button" id="buttonw" value="W">
                <input type="button" id="buttonnb" value="Nb">
                <input type="button" id="buttonlb" value="Lb">
                <input type="button" id="button+" value="+">
                <input type="hidden" name="run" id="run" value="0">
                <input type="hidden" name="extra" id="extra" value="0">
                <input type="hidden" name="wicket" id="wicket" value="0">
                <input type="hidden" name="" id="battingin1" value="0">
            <input type="hidden" name="" id="battingin2" value="0">





            <br><br>
                <span style="text-shadow:1px 1px 1px #B11B24;font-size:20px;font-family:Monoglyceride">Wicket:</span><select style="width:240px;border-radius:4px;margin-left:28px;height:26px;margin-bottom:30px">
                    <option>player_1</option>
                    <option>player_2</option>
                </select>
            <meta name="csrf-token" content="{{ csrf_token() }}">

            <input id="scoreSubmit" type="submit" name="submit" value="Submit">
            {{--</form>--}}
?        </div>
        <div id="matchevent_commentry">
            <form action="" method="post">
                <textarea rows="5" cols="50" placeholder="Commentry here......"></textarea><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div >
            <p id = "copywrite_matchevent">copyright@KU Cricket Board.com</p>
        </div>
    </div>
</div>
</body>
<script src="matchEventScript.js"></script>

</html>
