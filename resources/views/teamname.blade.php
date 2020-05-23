
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
        <p id="admin_welcome">Welcome to CricScore(Team Name)</p>
        <p id="teamlist">Insert team Information</p>

        {!! Form::open(['route' => 'teamname.store','method'=>'POST']) !!}

        <div id="teamname_insert">
            {{--<form action="" method="post">--}}
                <table>
                    <tr>
                        <td>Team Name:</td>
                        <td><input type="text" name="name" placeholder="Team name"></td>
                    </tr>
                    <tr>
                        <td>Date:</td>
                        <td><input type="text" name="date" placeholder="Date"></td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td><input type="text" name="description" placeholder="Description"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
						<span style="float:right">
						<input type="submit" name="submit" value="Submit">
						<input type="reset" value="Reset">
						</span>
                        </td>
                    </tr>
                </table>
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
