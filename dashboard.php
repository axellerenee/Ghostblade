<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Workaholic Dashboard</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/logosmallsquare.png">
		<!-- CSS -->
		<link href="assets/css/dashboard.css" rel="stylesheet"> <!-- Dark theme -->
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
    			alert("Invalid or empty credentials.");
			}
			function Logout() {
				window.location="index.php";
			}
			function DemoAlert() {
				alert("No login credentials entered.\nYou are currently using a demo view.");
			}
		</script>
		<?php
			if(empty($_POST['username'])) {
				echo '<script type="text/javascript">', 'DemoAlert();', '</script>';
			}
		?>
	</head>
	<body>
		<header>
			<h1 style="display: inline;"> <a href="index.php"><img id="logo" src="assets\images\logowhite.png"/></a></h1>
			<button style="display: inline-block;float: right; margin-left: -5px; margin-top: 4px; margin-right: 30px;" class="userbutt" onclick="Logout()">Logout</button>
			<form action="dashboard.php" method="post" style="display: inline;">
				<table border="0" style="display: inline; float: right;">
					<tr style="display: inline;">
					<td align="left"><input class="inputfield" type="text" readonly="yes" name="username" value="<?php
					if(!empty($_POST['username'])) {
						$username = $_POST['username'];
						echo $username;
					} else {
						echo "Demo Admin";
					}
					?>"
				size="20" maxlength="50" style="background: url(assets/images/mdl2/people.png); background-color: rgba(100, 100, 100, 0.3); background-size: 30px; padding-left: 35px; background-repeat: no-repeat;"></td>
					</tr>
					<tr style="display: inline;">
					<td colspan="2" align="center">
					</td>
					</tr>
				</table>
			</form>
			<nav id="headnav">
				<a id="current" style="border-right: 1px solid #e4e4e4;">Dashboard</a>
				<a id="current" style="padding-left: 25px;">Employees</a>
				<a href="leaderboard.php">Leaderboard</a>
				<a href="prizes.php">Rewards</a>
			</nav>
		</header>
		<section id="filler">
		</section>
		<section id="content">
			<h1>Employees</h1>
			<nav id="empnav">
				<a id="active">All</a>
				<a class="others">Executives</a>
				<a class="others">Board of Directors</a>
				<a class="others">IT</a>
				<a class="others">Marketing</a>
				<a class="others">Business</a>
				<a class="others">Multimedia</a>
				<a class="others">Sanitation</a>
				<a class="others">Other Branches</a>
			</nav>
			<div id="entrycontainer">
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/pat.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/pat.jpg);"></h6>
						<h5>Patricia Calugas</h5>
						<p>Chief Operating Officer</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							915 clock ins
						</div>
						<div class="moreinfo" id="info2">
							pcalugas@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							690,000 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/mina.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/mina.jpg);"></h6>
						<h5>Carmina Ambrocio</h5>
						<p>Chief Executive Officer</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							575 clock ins
						</div>
						<div class="moreinfo" id="info2">
							minaambrocio@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							420,000 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/jason.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/jason.jpg);"></h6>
						<h5>Jade Adriano</h5>
						<p>Senior Developer</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							249 clock ins
						</div>
						<div class="moreinfo" id="info2">
							jeadriano@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							550,000 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/pineda.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/pineda.jpg);"></h6>
						<h5>Justin Pineda</h5>
						<p>Security Analyst</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							135 clock ins
						</div>
						<div class="moreinfo" id="info2">
							jpineda@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							1,337 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/reisha.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/reisha.jpg);"></h6>
						<h5>Reisha Ferrer</h5>
						<p>Marketing Manager</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							105 clock ins
						</div>
						<div class="moreinfo" id="info2">
							rferrer@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							92,100 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/ashley.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/ashley.jpg);"></h6>
						<h5>Ashley Hwang</h5>
						<p>Foreign Affairs Representative</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							209 clock ins
						</div>
						<div class="moreinfo" id="info2">
							ahwang@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							4,250 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/jennifer.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/jennifer.jpg);"></h6>
						<h5>Jennifer Reyes</h5>
						<p>Assistant Marketing</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							73 clock ins
						</div>
						<div class="moreinfo" id="info2">
							jreyes@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							46,540 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/ding.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/ding.jpg);"></h6>
						<h5>Gertrude Parado</h5>
						<p>Art Director</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							45 clock ins
						</div>
						<div class="moreinfo" id="info2">
							gparado@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							14,240 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/tommy.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/tommy.jpg);"></h6>
						<h5>Antonio Lu</h5>
						<p>Chinese Ambassador</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							74 clock ins
						</div>
						<div class="moreinfo" id="info2">
							alu@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							5,740 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Olores.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Olores.jpg);"></h6>
						<h5>Brian Dolores</h5>
						<p>R&D Manager</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							35 clock ins
						</div>
						<div class="moreinfo" id="info2">
							bdolores@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							5,600 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/Roguel.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Roguel.jpg);"></h6>
						<h5>Kaila Pangilinan</h5>
						<p>Fashion Designer</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							23 clock ins
						</div>
						<div class="moreinfo" id="info2">
							kpangilinan@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							3,250 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Samantha.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Samantha.jpg);"></h6>
						<h5>Samantha Sy</h5>
						<p>Human Resources</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							9 clock ins
						</div>
						<div class="moreinfo" id="info2">
							ssy@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							4,610 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Melad.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Melad.jpg);"></h6>
						<h5>Kawasaki Melad</h5>
						<p>Japanese Branch Manager</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							4 clock ins
						</div>
						<div class="moreinfo" id="info2">
							kmelad@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							4,220 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/Steph.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Steph.jpg);"></h6>
						<h5>Stephanie Jung</h5>
						<p>Nurse</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							53 clock ins
						</div>
						<div class="moreinfo" id="info2">
							sjung@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							81,500 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Reyes.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Reyes.jpg);"></h6>
						<h5>Shane Reyes</h5>
						<p>Editorial Assitant</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							12 clock ins
						</div>
						<div class="moreinfo" id="info2">
							sreyes@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							51,500 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Delfin.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Delfin.jpg);"></h6>
						<h5>Christopher Delfin</h5>
						<p>Videographer</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							72 clock ins
						</div>
						<div class="moreinfo" id="info2">
							cdelfin@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							94,200 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/Dette.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Dette.jpg);"></h6>
						<h5>Bernadette Anderson</h5>
						<p>Chief Editor</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							26 clock ins
						</div>
						<div class="moreinfo" id="info2">
							banderson@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							8,210 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Elaine.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Elaine.jpg);"></h6>
						<h5>Elaine Avriele</h5>
						<p>Customer Relations Manager</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							2,013 clock ins
						</div>
						<div class="moreinfo" id="info2">
							eavriele@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							2,014 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Janine.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Janine.jpg);"></h6>
						<h5>Janine Potter</h5>
						<p>Land Manager</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							85 clock ins
						</div>
						<div class="moreinfo" id="info2">
							jpotter@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							2,500 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/Huliganga.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Huliganga.jpg);"></h6>
						<h5>Mitsubishi Huliganga</h5>
						<p>Japanese Branch Assistant</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							1 clock in
						</div>
						<div class="moreinfo" id="info2">
							mhuliganga@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							1,000 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Alodia.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Alodia.jpg);"></h6>
						<h5>Alodia Gosiengfiao</h5>
						<p>Model</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							529 clock ins
						</div>
						<div class="moreinfo" id="info2">
							agosiengfiao@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							550,000 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Valguna.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Valguna.jpg);"></h6>
						<h5>Hervy Valguna</h5>
						<p>Manager</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							0 clock ins
						</div>
						<div class="moreinfo" id="info2">
							hvalguna@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							0 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/Jessica.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Jessica.jpg);"></h6>
						<h5>Jessica Jung</h5>
						<p>Designer</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							9 clock ins
						</div>
						<div class="moreinfo" id="info2">
							j_snsd@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							9,999 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Espinas.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Espinas.jpg);"></h6>
						<h5>Maria Espinas</h5>
						<p>Assistant Designer</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							34 clock ins
						</div>
						<div class="moreinfo" id="info2">
							mespinas@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							3,420 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Andrea.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Andrea.jpg);"></h6>
						<h5>Andrea Hernandez</h5>
						<p>Business Analyst</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							92 clock ins
						</div>
						<div class="moreinfo" id="info2">
							ahernandez@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							62,520 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/Angel.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Angel.jpg);"></h6>
						<h5>Angel Munar</h5>
						<p>Website Developer</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							63 clock ins
						</div>
						<div class="moreinfo" id="info2">
							amunar@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							62,520 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Claveria.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Claveria.jpg);"></h6>
						<h5>Happy Claveria</h5>
						<p>Market Analyst</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							32 clock ins
						</div>
						<div class="moreinfo" id="info2">
							hclaveria@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							3,200 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/Caguioa.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Caguioa.jpg);"></h6>
						<h5>Alster Caguioa</h5>
						<p>Multimedia Artist</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							55 clock ins
						</div>
						<div class="moreinfo" id="info2">
							acaguioa@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							9,220 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: right; background-image: url(assets/images/employees/Dimaranan.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/Dimaranan.jpg);"></h6>
						<h5>Chang Dimaranan</h5>
						<p>Database Analyst</p>
						<h4 class="loggedout">CLOCKED OUT</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							87 clock ins
						</div>
						<div class="moreinfo" id="info2">
							cdimaranan@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							4,100 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
				<div id="entryfiller" style="float: left; background-image: url(assets/images/employees/LK.jpg);">
					<div id="entry">
						<h6 style="background-image: url(assets/images/employees/LK.jpg);"></h6>
						<h5>Lynoelle Kristina Mae</h5>
						<p>Website Designer</p>
						<h4 class="loggedin">CLOCKED IN</h3>
						<div id="perfcontainer"></div>
						<div class="moreinfo" id="info1">
							42 clock ins
						</div>
						<div class="moreinfo" id="info2">
							lkmae@workaholic.co
						</div>
						<div class="moreinfo" id="info3">
							40,820 total points
						</div>
						<div class="floatcontain">
							<button class="moreinfo" id="fltlft">
								Clock In
							</button>
							<button class="moreinfo" id="fltrght">
								Clock Out
							</button>
						</div>
					</div>
				</div>
		</div>
		</section>
		<footer>
			<div id="backtotop">
				<i id="chevron"></i>
			</div>
			<div id="footstuff">
				<a href="http://tanda.co" target="_blank">
					<img src="assets\images\logosmall.png">
				</a>
				<div class="footcontain">
					<h4>About Workaholic</h4>
					<p>Learn more about the automated login suite, its structure, how it works, and the people behind it.</p>
					<ul>
					<li><a href="about.html">About us</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="privacy.html">Privacy Policy</a></li>
					<li><a href="feedback.html">Send your feedback</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Workaholic Links</h4>
					<ul>
					<li><a href="https://www.dartegnian.co">Current Partners</a></li>
					<li><a href="https://www.dartegnian.co">Partner With Us</a></li>
					<li><a href="https://www.dartegnian.co">Service Status</a></li>
					<li><a href="https://www.dartegnian.co">Licensing</a></li>
					<li><a href="https://www.dartegnian.co">Tutorials</a></li>
					<li><a href="https://www.dartegnian.co">Get Help</a></li>
					<li><a href="https://www.dartegnian.co">Termination</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>About TANDA</h4>
					<ul>
					<li><a href="https://www.tanda.co/about/">About</a></li>
					<li><a href="https://www.tanda.co/blog/">Careers</a></li>
					<li><a href="https://www.facebook.com/tandaclocks">Facebook Page</a></li>
					<li><a href="https://my.tanda.co/api/v2/documentation">API Docs</a></li>
					<li><a href="https://my.tanda.co/try/">Free Trial</a></li>
					<li><a href="http://help.tanda.co/">Help Center</a></li>
					<li><a href="https://www.tanda.co/partners/">Parner Program</a></li>
					</ul>
				</div>
				<div class="footcontain">
					<h4>Other TANDA Links</h4>
					<ul>
					<li><a href="https://www.tanda.co/employee-time-clock/">Time Clock</a></li>
					<li><a href="https://www.tanda.co/pricing/">Pricing</a></li>
					<li><a href="https://www.tanda.co/leave-management/">Leave Management</a></li>
					<li><a href="https://www.tanda.co/award-interpretation/">Award Interpretation</a></li>
					<li><a href="https://www.tanda.co/rostering-software/">Rostering Software</a></li>
					<li><a href="https://www.tanda.co/payroll/">Payroll Integration</a></li>
					<li><a href="https://www.tanda.co/webinars/">Webinars</a></li>
					</ul>
				</div>
				</div>
		</footer>
		<footer id="apcfooter">
			<center>
				Coded with <a href="assets\images\APC-Hymn.jpg">❤</a> by the students of <a href="https://apc.edu.ph/" target="_blank">Asia Pacific College</a>
			</center>
		</footer>
	</body>
</html>