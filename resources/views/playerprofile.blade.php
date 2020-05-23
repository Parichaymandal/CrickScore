
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
                    <a  href="/playername">Player Name</a>
                    <a  href="/teamname">Team name</a>
                    <a  href="/fixture">Fixture</a>
                </div>
            </div>
            <div id="inup">Update
                <div id="inup_content">
                    <a  href="/matchevent">Match Event</a>
                    <a  href="/teamhistory">Team History</a>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom">
        <img src="Backbottom.png" width="100%" height="1250px">
        <p id="admin_welcome">Welcome to CricScore(Player Profile)</p>
        <p id="teamlist">Update Player Information</p>
        <div id="playerprofile_update">
            <form action="" method="post">
                TeamName:<select style="width:240px;border-radius:4px;margin-left:15px;height:26px;margin-bottom:20px">
                    <option></option>

                </select><br>
                <table>
                    <tr>
                        <th>PlayerName</th>
                        <th>Age</th>
                        <th>Jersey No</th>
                        <th>Edit</th>
                    </tr>

                    @foreach($players as $player)
                    <tr>
                        <td>{!! $player->name !!}</td>
                        <td>{!! $player->age !!}</td>
                        <td>{!! $player->jersy_no !!}</td>
                        <td><a href="/playerprofile_update">edit</a></td>
                    </tr>
                    @endforeach
                </table>

            </form>
        </div>
        <div >
            <p id = "copywrite_playerprofile">copyright@KU Cricket Board.com</p>
        </div>
    </div>
</div>
</body>
</html>
