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
				<a href="user_score.blade.php"  >Score</a>
				<a href="user_fixture.blade.php" class="active">Fixture</a>
				<a href="user_team_profile.blade.php" >Team Profile</a>
				
			</div>
		</div>
		<div id="bottom">
			<img src="Backbottom.png" width="100%" height="850px">	
			<p id="admin_welcome">Welcome to CricScore(Fixture)</p>
			<div id="team_fixture">
				<form action="" method="post">
					<table>
						<tr>
							<th>Match-No</th>
							<th>Match</th>
							<th>Date</th>
							<th>Time</th>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
			
						</tr>
					</table>
					
				</form>
			<div >
				<p id = "copywrite">copyright@KU Cricket Board.com</p>
			</div>
		</div>
	</div>
</body>
</html>
