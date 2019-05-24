<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Game Info | Ghostblade</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/ghostbladeicon.png">
		<!-- CSS -->
		<link href="assets/css/darktheme-gameinfo.css" rel="stylesheet"> <!-- Dark theme -->
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
				<a href="classes.php" id="current">Game Info</a>
				<a href="events.php">Events</a>
				<a href="forum.php">Forum</a>
				<a href="profile.php">Profile</a>
			</nav>
		</header>
		<section class="fullbackground" id="final">
		<br><br>
			<div id="formcontainer">
			<video width=80% height="730" controls autoplay>
			  <source src="assets/videos/video.mp4" type="video/mp4">
			</video>
			<div class="platform-icons cf">
				<img src="assets/images/ranger.png">
				<img src="assets/images/darkknight.png">
				<img src="assets/images/sorcerer.png">
				<img src="assets/images/kunoichi.png">
				<img src="assets/images/warrior.png">
				<img src="assets/images/maehwa.png">
				<img src="assets/images/wizard.png">
				<img src="assets/images/lahn.png">
				<img src="assets/images/valkyrie.png">
            	</div>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\ranger.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>RANGER</h2>
				<p class="firsttwo">Uses ranged techniques with bows and arrows and is able to avoid crisis with powerful short-range kick when enemies get near. Uses skills to maintain its distance between enemies or even stop their movements for a while with mighty skills. Though it possesses explosive skills that can inflict harm on multiple enemies at once, the explosion range is small in scale, and thus cannot handle a lot of enemies at the same time.</p>
				<br/>
				<p class="firsttwo">An awakened Ranger is eligible to wield swords embedded with Kamasylven spirit. Different from bows, by summoning spirit's power the sword which can inflict critical damage in short and medium-range enables the ranger to make various irregular movements and cause enormous harm to enemies, with chaos.</p>
				<br/>
				<p class="firsttwo">Attack Type | Ranged <br><br>
				General Weapon | [Main Weapon] Longbow, [Sub Weapon] Dagger <br><br>
				Awakening Weapon | Kamasylven Sword, Branch of Kamasylve the sacred tree became a sword embedded with spirit.
				</p>
			</aside>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\darkknight.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>DARK KNIGHT</h2>
				<p class="firsttwo">Dark Knight wields the lethal but beautiful Kriegsmesser and gains power by consuming the energy of nature and expelling them. Her Keigsmesser is heavy and powerful, but she possesses a unique style that allow her to be swift and tactical in battle. She also uses a variety of ranged magical skills that she can mix into her combos. All of this is used to confuse her enemies and create opportunities for a deadly combo of attacks.</p>
				<br/>
				<p class="firsttwo">Dark Knight equips the Vediant after her awakening. The Vediant helps her to control the power of her spirits to summon the Kriegesmesser of Vediant and Phantom Blade of Vediant. She is now capable of switching between a series of melee attacks or absorb black energy and consume the Phantom Blade to perform ranged attacks.</p>
				<br/>
				<p class="firsttwo">Attack Type | Melee <br><br>
				General Weapon | [Main Weapon] Kriegsmesser, [Sub Weapon] Ornamental Knot <br><br>
				Awakening Weapon | Vediant, Summon the weapon forged from the power of black spirits, Witness the Kriegesmesser of Vediant and Phantom Blade of Vediant.
				</p>
			</aside>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\sorceress.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>SORCERESS</h2>
				<p class="firsttwo">The Sorceress is a hybrid character who is skilled in both close and long-range combats by using the magic of darkness. Sorceress wields a special symbol called Talisman on its right hand that amplifies the aura of darkness. It can cast the dark power to a ranged enemy or blast it at a nearby enemy and curse the enemy to make the battle favorable. But it is important to attack its enemies without being hit as much as possible due to its weak defense.</p>
				<br/>
				<p class="firsttwo">Sorceress will be able to use its Scythe after awakening. Scythe with its dreadful blade, combines Sorceress's powerful dark magic, absorbing the enemy's life, while hiding in the darkness and inflicting a fatal wound. It is said that no one who has witnessed a Sorceress who opens the door of darkness and summons flock of crows can return alive.</p>
				<br/>
				<p class="firsttwo">Attack Type | Melee + Ranged Magic<br><br>
				General Weapon | [Main Weapon] Amulet, [Sub Weapon] Talisman <br><br>
				Awakening Weapon | Scythe that the original Sorceress Cartian used, Destructive power of Cartian is contained within.
				</p>
			</aside>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\kunoichi.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>KUNOICHI</h2>
				<p class="firsttwo">Kunoichi is an assassin who resorts to swords, bodily skills, and Ninjutsu. It has unique skills and various crowd control techniques such as smoke shell, concealment and swift movement capability which have striking features of gusting with fashion towards enemies so that they do not know what hit them. However, as all features come with a price, it has less defence capacity which demands adequate use of skills. It is a "character for advanced users requiring top abilities to control".</p>
				<br/>
				<p class="firsttwo">Kunoichi becomes eligible to wield Sah Chakram which is a traditional weapon of the Sonans. Sah Chakram further strengthens Kunoichi's assassinology tinged with vengeance and by also increasing defence capacity that used to be its weak point Kunoichi presents a whole new level of force which allows it to overwhelm enemies that were beyond the reach before awakening. However In order to conduct Kunoichi's techniques before and after awakening, experience in depth is required.</p>
				<br/>
				<p class="firsttwo">Attack Type | Melee <br><br>
				General Weapon | [Main Weapon] Shortsword, [Sub Weapon] Shuriken / Kunai <br><br>
				Awakening Weapon | Sah Chakram, a foreign weapon left behind by the leader of the enemy race, Kunoichi's resentment is sharply engraved.
				</p>
			</aside>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\warrior.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>WARRIOR</h2>
				<p class="firsttwo">A Warrior is a melee character who uses swords and shields and has an appropriate combination of attack and defense. He uses a single-handed sword to make a powerful attack. It exerts excellent physical abilities and it can attack an enemy while engaging or catching it. The Warrior uses an valid defensive posture with a shield to lead the battle more advantageously. Warriors with brilliant and diverse actions become stronger in melee combat as he learns skills.</p>
				<br/>
				<p class="firsttwo">The awakened warrior deals with a Great Sword and can use more dynamic and powerful skills. The awakened warrior is a key attacker of melee combat, who can switch weapons freely and use optimized attack and defense techniques in each battle.</p>
				<br/>
				<p class="firsttwo">Attack Type | Melee <br><br>
				General Weapon | [Main Weapon] Longsword, [Sub Weapon] Shield<br><br>
				Awakening Weapon | A great sword used by Goyen who were killed by Dandelion, Goyen's sprit is contained within.
				</p>
			</aside>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\maehwa.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>MAEHWA</h2>
				<p class="firsttwo">Maehwa is a female swordsman who has a good command of lithe Oriental swordsmanship and archery and has a feature of naturally linking movements like the flows of river in any action. In melees, she overwhelms the enemy with swordsmanship, fancy as fluttering flowers and in ranged combats she binds them with agile and accurate archery . Maehwa, with elegant combat figures that look like a leaf dancing in the air,is one that should never be left out of battles.</p>
				<br/>
				<p class="firsttwo">Awakened Maehwa is eligible to use a new power and Kerispear. Kerispears greatly increases Maehwa's attack range and allows her to injure enemies critically by targeting them when they're not focused. Kerispear attacks are fast for eyes to see and with its moves that are gentle and gorgeous like a dance many are bewitched but the moment enemy feels it coming, there is no life to be spared.</p>
				<br/>
				<p class="firsttwo">Attack Type | Melee <br><br>
				General Weapon | [Main Weapon] Blade, [Sub Weapon] Horn Bow<br><br>
				Awakening Weapon | Kerispear, the spear that has been passed down amongst the leaders of Order of the Apricot along with the secret note, goes together on the journey to reach the extent of Crescent Petal.
				</p>
			</aside>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\witch.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>WITCH</h2>
				<p class="firsttwo">Witches are those who mastered magic at a young age, and they utilize fire, ice, wind, lightning, soil and other various natural elements from a distance to BURN, freeze, and destroy enemies. In particular, their firepower that is poured into a certain range is second to none. Not only that, but it also has the ability to recover the physical strength and resources of the ally using magic energy, as well as the skill to overcome the space. The versatile witch shows an outstanding performance on both attack and defends sides during the battle.</p>
				<br/>
				<p class="firsttwo">The witch can interact with the elemental force and deals with the awakening Aad Sphera. The awakened witch can summon a pure power of the earth and lightening, Gorr and Tett, and cast a magical attack with a range at a level of disaster. In addition, skill casting time is reduced, allowing the witch quick and continuous magic attacks.</p>
				<br/>
				<p class="firsttwo">Attack Type | Ranged Magic <br><br>
				General Weapon | [Main Weapon] Staff, [Sub Weapon] Dagger <br><br>
				Awakening Weapon | Aad Sphera, a magical tool created by Sage Deneve, continued journey to a new land with Aad Sphera
				</p>
			</aside>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\lahn.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>LAHN</h2>
				<p class="firsttwo">Lahn has mastered her weapon which is a Crescent Pendulum at the end of a long rope. She can throw it far or swings it in a large arc using agile and light movements. This gives her powers that are terrifying and destructive with multiple attacks that hits enemies in a large area and diverse combos.</p>
				<br/>
				<p class="firsttwo">Lahn uses the awakening weapon called 'Crimson Glaives' that has two swords attached to a chain. She attacks enemies by throwing the glaives with quick and wide movements. This gives her attacks that hits a large area even more power, quick combos to execute with explosive damage, and the ability to grab enemies.</p>
				<br/>
				<p class="firsttwo">Attack Type | Melee <br><br>
				General Weapon | [Main Weapon] Crescent Pendulum, [Sub Weapon] Noble Sword <br><br>
				Awakening Weapon | Crimson Glaives, the mysterious item which curses anyone that touches it. Lahn gets a hold of it when she is tricked by her disloyal subject.
				</p>
			</aside>
		</section>
		<section id="content">
			<div id="imagecontainer">
				<div id="image1container" class="images">
					<img src="assets\images\valkyrie.jpg"\>
				</div>
			</div>
			<aside id="infospace">
				<h2>VALKYRIE</h2>
				<p class="firsttwo">Valkyrie is a character who plays a leading role in the battlefield with swords and shields based on Elion's sacred skills. The stable combat style is similar to the Warrior, but it gives benefits such as restoring HP of friends nearby and providing the buff effect, and by using sacred skill, she can inflict powerful damage to the enemy.</p>
				<br/>
				<p class="firsttwo">The awakened Valkyrie will be able to handle the spear, Lancia, which is taller than her. This Elion blessed weapon shows a powerful breakthrough and upgrades Valkyrie's attack and defensive abilities at the same time. The sacred power committed by Valkyrie whose combat sense has gone to the extreme can breakthrough enemy line and restores friends HP.</p>
				<br/>
				<p class="firsttwo">Attack Type | Melee <br><br>
				General Weapon | [Main Weapon] Longsword, [Sub Weapon] Shield <br><br>
				Awakening Weapon | Lancia, a spear that is as tall as Valkyrie, her righteous ideology is contained within
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
			</div>
		</section>
    </body>
    </html>
