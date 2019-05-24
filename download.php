<!DOCTYPE html>
<html lang="en">
<style>
        @viewport{
            zoom: 1.0;
            width: extend-to-zoom;
        }
        @-ms-viewport{
            width: extend-to-zoom;
            zoom: 1.0;
        }
</style>

	<head>
		<title>Download | Ghostblade</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/ghostbladeicon.png">
		<!-- CSS -->
		<link href="assets/css/darktheme-downloadss.css" rel="stylesheet"> <!-- Dark theme -->
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
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="hextech.ico">
<link rel="stylesheet" href="style.css">
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

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
				<a id="current">Download</a>
				<a href="classes.php">Game Info</a>
				<a href="events.php">Events</a>
				<a href="forum.php">Forum</a>
				<a href="profile.php">Profile</a>
			</nav>
		</header>
		<section id="content">
			<aside id="infospace1">
			<h2>CLIENT DOWNLOAD</h2>
			<br>
			<button class="contactbutt" id="partnerbutt"><a href ="classes.php">Download Game</a></button>
			<br><br><br><br><br>
			<h2>MANUAL PATCH</h2>
			<p class="firsttwo">[insert download links here]</p>
			</aside>
			<div id="imagecontainer1">
				<div id="image1container" class="images">
					<img src="assets\images\child.jpg"\>
				</div>
			</div>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\tower.jpg"\>
				</div>
			</div>
			<aside id="infospace">
			<h2>SYSTEM REQUIREMENTS testing</h2>
			<br><br>
				<p class="firsttwo">
				<table>
				<tr>
    				<th>ITEM</th>
    				<th>MINIMUM</th>
  					<th>RECOMMENDED</th>
 				</tr>
  			<tr>
  				  <td>OS</td>
    				<td>Windows 7 or higher (32-bit or 64-bit)</td>
    				<td>Windows 7 or higher (32-bit or 64-bit)</td>
  			</tr>
  			<tr>
  			  <td>Processor</td>
  			  <td>Intel Core i3-530 2.9 GHz</td>
  			  <td>Intel Core i5-650 3.2GHz</td>
				</tr>
			  <tr>
    			<td>MEMORY</td>
    			<td>4 GB RAM</td>
   				<td>8 GB RAM</td>
  			</tr>
 				<tr>
   				<td>GRAPHICS</td>
    			<td>GTS 250, GeForce 9800 GTX, Radeon HD 3870 X2</td>
    			<td>NVIDIA GTX 970, AMD RX 480</td>
  		</tr>
 			<tr>
  			  <td>NETWORK</td>
  			  <td>Broadband Internet connection</td>
    			<td>Broadband Internet connection</td>
  		</tr>
 			<tr>
  		  <td>RESOLUTION</td>
    		<td>1280x720</td>
   			<td>1280x720</td>
  		</tr>
			<tr>
  		  <td>STORAGE</td>
    		<td>27 GB available space</td>
   			<td>27 GB available space</td>
  		</tr>
			</table>
			</p>
			</aside>
		</section>
		<footer>
		<div id="backtotop">
				<i id="chevron"></i>
			</div>
			<div id="footstuff">
				<a href="https://thesecretsofasilentprincess.blogspot.com/" target="_blank">
					<img src="assets/images/ghostbladeicon.png">
				</a>
				<div class="footcontain">
					<h4>About</h4>
					<ul>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Notices</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Updates</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Events</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">GM Note</a></li>
					<li><a href="">Terms of Service</a></li>
					<li><a href="">Privacy Policy</a></li>
					<li><a href="">Operational Policy</a></li>
					<li><a href="">Event Rules</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Overview</h4>
					<ul>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Features</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Classes</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Storyline</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Wiki</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Soundtracks</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Shop</h4>
					<ul>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Packages</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Top Up</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Redeem Coupon</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Central Market</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Community</h4>
					<ul>
					<li><a href="download.php">General Discussion</a></li>
					<li><a href="download.php">Tips & Guides</a></li>
					<li><a href="hdownload.php">Screenshot / Clips</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">FAQ</a></li>
					<li><a href="https://thesecretsofasilentprincess.blogspot.com/">Customer Support</a></li>
					<li><a href="">System Notice</a></li>
					</ul>
				</div>
				</div>
		</footer>
    </body>
    </html>
