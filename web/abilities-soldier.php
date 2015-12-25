<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Abilities - Soldier</title>
	<?php
	include_once 'php/components/meta.php';
	?>

	<?php
	include_once 'php/components/css-favicon.php';
	?>

	<?php
	include_once 'php/components/javascript.php';
	?>
</head>

<body onload="window.status='* Webdesign and code by \'Krysak4eveR\' *'" id="go-up">
<!-- CONTAINER - S -->
<div id="div-container">

<!-- TOP MENU - S -->
<?php
include 'php/components/banner.php';
?>

<br />

<div id="div-cssmenu">
<ul id="menu">
<li><a href="index.php">home</a></li>
<li><a href="armies.php">armies</a></li>
<li><a href="classes.php">classes</a></li>
<li><a href="abilities.php" class="button-blue">abilities</a></li>
<li><a href="gameplay.php">gameplay</a></li>
<li><a href="media.php">media</a></li>
<li><a href="links.php">links</a></li>
<li><a href="contact.php">contact</a></li>
<li><a href="faq.php">faq</a></li>
<li><a href="404.php" id="wikia"><small>wikia</small></a></li>
</ul>
</div>
<!-- TOP MENU - E -->

<br />
	<!-- FAQ HELP - S -->
	<?php
	include 'php/components/error-no-js.php';
	?>
	<!-- FAQ HELP - E -->
<br />

<!-- MAIN CONTENT - S -->
	<div class="tbox-border-white">
	<div id="tbox-auto">
	<!-- SUB NAVIGATION - S -->
	<div>
     <!-- LEFT SIDE - S -->
	<a href="abilities-soldier.php"><span class="submenu-2">soldier</span></a>
	&nbsp; <a href="abilities-gunner.php"><span class="submenu-1">gunner</span></a>
	&nbsp; <a href="abilities-commando.php"><span class="submenu-1">commando</span></a>
     <!-- LEFT SIDE - E -->

     <!-- RIGHT SIDE - S -->
     <?php
     include 'php/components/sub-menu-right-side.php';
     ?>
     <!-- RIGHT SIDE - E -->
	<hr />
	</div>
	<!-- SUB NAVIGATION - E -->

<!-- TEXT n PICS - S -->
<!-- COORDS - LEFT,TOP + RIGHT,BOTTOM - S -->
<!--
LEFT (goes from left)
TOP (goes from top)
+
RIGHT (goes from left)
BOTTOM (goes from top)
-->
<p class="align-c">
<img src="images/build-pics/abilities/a-s/trans-abilities-s.png" width="655" height="423" alt="ABILITIES" usemap="#abilities" class="border-none img-padding" />
<map name="abilities" id="abilities">
	<area id="gunner" shape="rect"
	coords="365,355,415,395"
	alt="Royal Army"
	href="abilities-gunner.php" />

	<area id="commando" shape="rect"
	coords="560,355,610,395"
	alt="Royal Army"
	href="abilities-commando.php" />
</map>
</p>
<!-- COORDS ... LEFT,TOP + RIGHT,BOTTOM - E -->

<table class="custom-div-blue" width="800">
<tr>
<td class="width-050">
<img src="images/icon/32x32/32x32-trans-r-flag.png" width="32" height="32" alt="National Army" class="float-l" />
</td>
<td>
<hr />
<strong class="align-c">Each faction has the same abilities</strong>
<hr />
</td>
<td class="width-050">
<img src="images/icon/32x32/32x32-trans-n-flag.png" width="32" height="32" alt="Royal Army" class="float-r" />
</td>
</tr>
</table>

<br />
<!-- SOLDIER ABILITIES - S -->
<table width="800" class="custom-div-blue" id="a-s">
<tr>
<th colspan="4">SOLDIER ABILITIES</th>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td><img src="images/icon/64x64/abilities/s/trans-blasting-strike.png" width="64" height="64" alt="Blasting Strike" /></td><td colspan="2"><strong>Blasting Strike</strong><br />Knock back all near by enemies and vehicles.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Explosion Power</td><td class="width-290">Refresh Time</td></tr>
<tr>
<td>Rank 1:</td><td>30</td><td>18 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>40</td><td>17 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>50</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>60</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>70</td><td>10 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/s/trans-combat-medicine.png" width="64" height="64" alt="Combat Medicine" /></td><td colspan="3"><strong>Combat Medicine</strong><br />Instantly heal yourself and all nearby team mates. The amount you are healed will go up for each team mate healed.</td>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Amount Healed</td><td class="width-170">Radius</td><td class="width-120">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>15%</td><td>8 meters</td><td>20 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>20%</td><td>8 meters</td><td>18 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>25%</td><td>8 meters</td><td>16 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>33%</td><td>8 meters</td><td>14 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>40%</td><td>8 meters</td><td>12 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/s/trans-grenade-spam.png" width="64" height="64" alt="Grenade Spam" /></td><td colspan="2"><strong>Grenade Spam</strong><br />Throw multiple grenades at once!</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Number of Grenades</td><td class="width-290">Refresh Time</td></tr>
<tr>
<td>Rank 1:</td><td>3</td><td>20 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>4</td><td>18 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>5</td><td>16 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>6</td><td>14 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>7</td><td>12 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/s/trans-6th-sense.png" width="64" height="64" alt="6th Sense" /></td><td colspan="2"><strong>6th Sense</strong><br />See all enemies for a short period of time.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Duration</td><td class="width-290">Refresh Time</td></tr>
<tr>
<td>Rank 1:</td><td>6 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>7 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>8 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>10 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>12 seconds</td><td>10 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/s/trans-burning-bullets.png" width="64" height="64" alt="Burning Bullets" /></td><td colspan="3"><strong>Burning Bullets</strong><br />Shots fired from your SMG set enemies on fire.</td>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-170">Damage over Time</td><td class="width-170">Duration</td><td class="width-120">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>20</td><td>4 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>24</td><td>4 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>28</td><td>5 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>32</td><td>5 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>36</td><td>6 seconds</td><td>10 seconds</td>
</tr>
</table>
<!-- SOLDIER ABILITIES - E -->

<br />

<div class="custom-div-yellow">  
<p class="align-c"><strong>* <a href="#go-up"><span class="text-uppercase">click here to go up</span></a> *</strong></p>
</div>
<!-- TEXT n PICS - E -->
	</div>
	</div>
<!-- MAIN CONTENT - E -->

	<!-- FOOTER - S -->
	<?php
	include 'php/components/footer.php';
	?>
	<!-- FOOTER - E -->
</div>
<!-- CONTAINER - E -->
</body>
</html>
