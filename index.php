<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Ghostblade</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/ghostbladeicon.png">
		<!-- CSS -->
		<link href="assets/css/darktheme.css" rel="stylesheet"> <!-- Dark theme -->
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
				<a id="current">Home</a>
				<a href="download.php">Download</a>
				<a href="classes.php">Game Info</a>
				<a href="events.php">Events</a>
				<a href="forum.php">Forum</a>
				<a href="profile.php">Profile</a>
			</nav>
		</header>
		<section id="filler">
		</section>
		<section id="hero">
			<h1 class="header"><span class="rotate">ROLE PLAYING, ACTION, ADVENTURE, ANGEL, DRAMA, FANTASY, KNIGHT, MAGIC, MEDIEVAL, MYTHOLOGY, SOLDIER, SUPERNATURAL, SURVIVAL, TRAGEDY</h1>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\sacrifice.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>GHOSTBLADE</h2>
				<p class="firsttwo">Long, long ago in Neraland, the pious humans built a great tower to show the respect to their goddess Nera and in return, she opened a gate to the world of Heaven's Eye. The feathered race came through this door bringing precious raw materials, steelmaking, agriculture, and languages. Human culture progressed greatly because of these people who they called angels, but the peace was broken when a greedy man named Guld killed one of the angels.</p>
				<br/>
				<p class="firsttwo">In the resulting war, humans nearly went extinct, but a man named Ostin led an army and pushed the angels back to their own world. Now two hundred years after the battle, there are rumors that a second tragedy will befall humanity. People believe that a girl known as the Ice Princess who King Haiquin found frozen in ice and adopted as his daughter will be the cause of this second destruction. This Ice Princess, actually called Yan, is a kind-hearted girl and decides to hand herself over to Ostin to preserve the peace, but a man named Ghostblade comes to kidnap her. While traveling with him, she decides that she wants to know the truth about who she is.</p>
				<br/>
			</aside>
		</section>
		<section class="fullbackground" id="final">
			<h1>Join the Adventure!</h1>
			<div id="formcontainer">
				<form action="" method="post" style="display: inline;">
					<table border="0" style="display: inline; margin: 0 auto">
						<tr style="display: inline;">
							<td align="left"><input class="inputfield" type="text" name="firstName_field" size="20" placeholder="First Name"  maxlength="50"></td>
							</tr>
							<tr style="display: inline;">
							<td align="left"><input class="inputfield" type="text" name="lastName_field" placeholder="Last Name" size="20" maxlength="50" /></td>
							</tr>
						</tr>
					</table>
					<table border="0" style="display: grid; margin: 0 auto">
						<tr style="display: inline;">
							<td align="left"><input class="inputfield" type="date" name="firstName_field"  placeholder="Birthday"  maxlength="50"></td>
							</tr>
							<tr style="display: inline;">
							<td align="left"><input class="inputfield" type ="dropdown" name="lastName_field" size="20" maxlength="50" value="Gender"/></td>
						</tr>
						</tr>
					</table>
					<table border="0" style="display: grid; margin: 0 auto">
						<tr style="display: inline;">
							<td align="left"><input class="inputfield" type="text" name="firstName_field" size="20" placeholder="Username"  maxlength="50"></td>
							</tr>
							<tr style="display: inline;">
							<td align="left"><input class="inputfield" type="text" name="lastName_field" value="@email.com" placeholder="Email" size="20" maxlength="50" /></td>
							</tr>
						</tr>
					</table>
					<table border="0" style="display: grid; margin: 0 auto">
						<tr style="display: inline;">
							<td align="left"><input class="inputfield" type="password" name="firstName_field" size="20" placeholder="Password"  maxlength="50"></td>
							</tr>
							<tr style="display: inline;">
							<td align="left"><input class="inputfield" type="password" name="lastName_field" placeholder="Confirm Password" size="20" maxlength="50" /></td>
							</tr>
						</tr>
					</table>
					<table border="0" style="display: grid; margin: 0 auto">
					<tr style="display: inline;">
						<td colspan="2" align="center"><input type="submit" value="Create New Account" class="button"/></td>
						</tr>
					</table>
				</form>
			</div>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<a href="products.php" target='_blank'>
						<img src="assets\images\smile.jpg"\>
					</a>
				</div>
			</div>
			<aside id="infospace">
				<h2>Available Wherever You Go</h2>
				<p class="firsttwo">This is a role-playing game. Join the ice princess on her journey to save her world from destruction and to know who she really is.</p>
				<br/>
				<h2>Cross-Platform</h2>
				<p class="firsttwo">Do not miss out on the game just because you are not using a computer. Ghostblade can be played on the following platforms. Click on the icon to download it on your devices.</p>
				<br/>
				<div class="platform-icons cf">
					<a id="apple" href="https://itunes.apple.com/ph/app/microsoft-excel/id586683407?mt=8" target="_blank">
						<i class="fa fa-apple" aria-hidden="true"></i>
					</a>
					<a id="android" href="https://play.google.com/store/apps/details?id=com.microsoft.office.excel&hl=en" target="_blank">
						<i class="fa fa-android" aria-hidden="true"></i>
					</a>
					<a id="windows" href="https://www.microsoft.com/en-ph/store/p/excel-mobile/9wzdncrfjbh3" target="_blank">
						<i class="fa fa-windows" aria-hidden="true"></i>
					</a>
					<a id="chrome" href="https://chrome.google.com/webstore/detail/ublock-origin/cjpalhdlnbpafiamejdnhcphjbkeiagm?hl=en" target="_blank">
						<i class="fa fa-chrome" aria-hidden="true"></i>
					</a>
					<a id="firefox" href="https://addons.mozilla.org/en-US/firefox/addon/ublock-origin/" target="_blank">
						<i class="fa fa-firefox" aria-hidden="true"></i></i>
					</a>
					<a id="opera" href="https://addons.opera.com/en/extensions/details/ublock/?display=en" target="_blank">
						<i class="fa fa-opera" aria-hidden="true"></i>
					</a>
					<a id="edge" href="https://www.microsoft.com/en-us/store/p/ublock-origin/9nblggh444l4?wa=wsignin1.0" target="_blank">
						<i class="fa fa-edge" aria-hidden="true"></i>
					</a>
            	</div>
			</aside>
		</section>
		<section class="fullbackground" id="vertmenu">
			<div class="verticalmenu" id="juan">
				<div class="vertcontain">
					<ul>
						<li>
							<img src="assets\images\knight.jpg">
						</li>
						<li>
							<img class="partnerimg" src="assets\images\hug.jpg">
						</li>
						<li>
							<img class="partnerimg" src="assets\images\war.jpg">
						</li>
						<li>
						</li>
					</ul>
				</div>
			</div>
			<div id="rightcontain">
				<h1>SEVEN TRUTHS</h1>
				<p>Traveling with Ghostblade, Yan decides that she wants to know the truth about who she is. There are seven identities available for the ice princess. Choose a path and see the journey play out for her and Ghostblade to save their world.</p>
				<br><br>
				<button class="contactbutt" id="partnerbutt"><a href ="classes.php">Choose A Path</a></button>
			</div>
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
		<footer id="alvffooter">
			<center>
				Coded with ❤ by Angela Lawece V. Fernandez
				<br>and i almost died
			</center>
		</footer>
	</body>
</html>