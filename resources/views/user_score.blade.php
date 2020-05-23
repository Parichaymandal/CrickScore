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
						<a  href="user_registration.html">Registration</a>
						<a  href="user.html">Logout</a>
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
			<div id="user_inup">
				<a href="crickscore.blade.php"  >Home</a>
				<a href="user_score.blade.php" class="active" >Score</a>
				<a href="user_fixture.blade.php"  >Fixture</a>
				<a href="user_team_profile.blade.php">Team Profile</a>
				
			</div>
		</div>
		<div id="bottom">
			<img src="Backbottom.png" width="100%" height="850px">	
			<p id="admin_welcome">Welcome to CricScore(Live Score)</p>
			<div id="score_run">
				<h3>Run:</h3><h3>{!! $score['run'] !!}</h3>
				<h3>Over:</h3><h3>{!! $score['over'] !!}.{!! $score['ball']%6 !!}</h3>
			</div>
			<div id="score_batt">
				<h1>Batting</h1>
				<table>
						<tr>
							<th>Player-Name</th>
							<th>Run</th>
							<th>Ball</th>
							<th>No_Of_4</th>
							<th>No_Of_6</th>
						</tr>
						<tr>
							<td>{!! $bat1['name'] !!}</td>
							<td>{!! $bat1performs['run']!!}</td>
							<td>{!! $bat1performs['bowl'] !!}</td>
							<td>{!! $bat1performs['no_of_fours'] !!}</td>
							<td>{!! $bat1performs['no_of_sixes'] !!}</td>
			
						</tr>
						<tr>
							<td>{!! $bat2['name'] !!}</td>
							<td>{!! $bat2performs['run']!!}</td>
							<td>{!! $bat2performs['bowl'] !!}</td>
							<td>{!! $bat2performs['no_of_fours'] !!}</td>
							<td>{!! $bat2performs['no_of_sixes'] !!}</td>
			
						</tr>
					</table>
			</div>
			<div id="score_bowl">
				<h1>Bowling</h1>
				<table>
						<tr>
							<th>Player-Name</th>
							<th>Run</th>
							<th>Ball</th>
							<th>Extras</th>

						</tr>
						<tr>
							<td>{!! $bowler['name'] !!}</td>
							<td>{!! $bowlerperforms['run'] !!}</td>
							<td>{!! $bowlerperforms['over'] !!}.{!! $score['ball']%6 !!}</td>
							<td>{!! $bowlerperforms['extra']!!}</td>

			
						</tr>
					</table>
			</div>
			<div >
				<p id = "copywrite">copyright@KU Cricket Board.com</p>
			</div>
		</div>
	</div>
</body>
</html>

