<?php include('profileserver.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Profile | Ghostblade</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/ghostbladeicon.png">
		<!-- CSS -->
		<link href="assets/css/darkprofile.css" rel="stylesheet"> <!-- Dark theme -->
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
		<!---<h1 style="display: inline;"> <img id="logo" src="assets\images\ghostbladeicon.png"/></h1> --->
		

			<nav id="headnav">
				<a href="index.php">Home</a>
				<a href="download.php">Download</a>
				<a href="classes.php">Game Info</a>
				<a href="forum.html">Forum</a>
				<a href="userprofile.php" id="current">Profile</a>
			</nav>
		</header>
		<br><br><br><br><br>
		<section id="hero">
			<h1 class="header"><span class="rotate">Welcome To Your Profile, Have A Good Day!</h1>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\painting1.jpg"\>
				</div>
			</div>
			<aside id="infospace">
                    <h2>Name:</h2><?php echo "$name" ?>
                    <h2>E-mail Address:</h2>
                    <h2>Bio:</h2>
					
			</aside>
		</section>
		<footer>
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
					<li><a href="classes.php">Classes</a></li>
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