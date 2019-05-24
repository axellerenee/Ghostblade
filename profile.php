<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Profile | Ghostblade</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/ghostbladeicon.png">
		<!-- CSS -->
		<link href="assets/css/darktheme-profile.css" rel="stylesheet"> <!-- Dark theme -->
		<!-- <link href="assets/css/styles-light.css" rel="stylesheet"> Light theme -->
		<link rel="stylesheet" type="text/css" href="assets/css/textrotator.css"/>
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Scripts -->
		<script src='assets/js/jquery.min.js'></script>
		<script src='assets/js/textrotator.js'></script>
		<script>
			$(document).ready(function(){
				$(".header .rotate").textrotator({
					animation: "dissolve",
					speed: 2000
				});
			});
			$(function() {
				$("#backtotop").click(function() {
					$("body,html").animate({
						scrollTop: 0
					}, 4500);
					return false
				})
			});
			function popup() {
    			alert("Invalid or empty credentials.\nPlease type in your credentials and click the \"Log In\" button");
			}
			function redirect() {
				window.location="dashboard.php";
			}
		</script>
	</head>
	<body>
		<header>
		<!----	<h1 style="display: inline;"> <img id="logo" src="assets\images\ghostbladeicon.png"/></h1> --->
			<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 4px; margin-right: 30px;" class="userbutt" onclick="redirect()">Forgot Password</button>
				<form action="dashboard.php" method="POST" style="display: inline;">
				<table border="0" style="display: inline; float: right;">
					<tr style="display: inline;">
					<td style="color: #fff">Username</td>
					<td align="left"><input class="inputfield" type="text" name="username" size="20" maxlength="50" style="background: url(assets/images/mdl2/people.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td style="color: #fff">Password</td>
					<td align="left"><input class="inputfield" type="password" name="password" style="background: url(assets/images/mdl2/lock.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;" size="20" maxlength="50" /></td>
					</tr>
					<tr style="display: inline;">
					<td style="border-right: 1px solid #e4e4e4; padding-right: 10px;" colspan="2" align="center"><input type="submit" value="Log In" class="button"/></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>

			<nav id="headnav">
				<a href="index.php">Home</a>
				<a href="download.php">Download</a>
				<a href="classes.php">Game Info</a>
				<a href="events.php">Events</a>
				<a href="forum.php">Forum</a>
				<a href="profile.php" id="current">Profile</a>
			</nav>
		</header>
		<br><br><br><br><br>
		
    </body>
    </html>
