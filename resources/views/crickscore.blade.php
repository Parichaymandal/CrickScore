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
				<a href="user.html"  class="active">Home</a>
				<a href="user_score.blade.php"  >Score</a>
				<a href="user_fixture.blade.php"  >Fixture</a>
				<a href="team_profile.html" >Team Profile</a>
				
			</div>
		</div>
		<div id="bottom">
			<img src="Backbottom.png" width="100%" height="850px">	
			<p id="admin_welcome">Welcome to CricScore</p>
			<p id="admin_discripul">You can see live score</p>
			<div id="admin_discrip">
				<ul>
					
					<li> team name </li>
					<li> player name </li>
					<li> fixture </li>
					<li> match event </li>					
				</ul>
			</div>
			<div >
				<p id = "copywrite">copyright@KU Cricket Board.com</p>
			</div>
		</div>
	</div>
</body>
</html>
