<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Abilities - Gunner</title>
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
	<a href="abilities-soldier.php"><span class="submenu-1">soldier</span></a>
	&nbsp; <a href="abilities-gunner.php"><span class="submenu-2">gunner</span></a>
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
<img src="images/build-pics/abilities/a-g/trans-abilities-g.png" width="655" height="423" alt="ABILITIES" usemap="#abilities" class="border-none img-padding" />
<map name="abilities" id="abilities">
	<area id="soldier" shape="rect"
	coords="165,355,215,395"
	alt="Royal Army"
	href="abilities-soldier.php" />

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
<!-- GUNNER ABILITIES - S -->
<table width="800" class="custom-div-blue" id="a-g">
<tr>
<th colspan="4">GUNNER ABILITIES</th>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr><td><img src="images/icon/64x64/abilities/g/trans-hero-shield.png" width="64" height="64" alt="Hero Shield" /></td><td colspan="3"><strong>Hero Shield</strong><br />Shield that absorbs damage from enemies.</td>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Shield Value</td><td class="width-170">Duration</td><td class="width-120">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>30</td><td>10 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>35</td><td>10 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>40</td><td>15 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>50</td><td>15 seconds</td><td>11 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>60</td><td>15 seconds</td><td>8 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/g/trans-i-eat-grenades.png" width="64" height="64" alt="I Eat Grenades" /></td><td colspan="4"><strong>I Eat Grenades</strong><br />Gobbles up all nearby explosives for a short duration. Each explosive eaten will heal a % of your total health.</td>
</tr>
<tr>
<td colspan="5"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-140">Heal % pick up</td><td class="width-110">Duration</td><td class="width-100">Radius</td><td class="width-130">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>5%</td><td>5 seconds</td><td>8 meters</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>5%</td><td>7 seconds</td><td>8 meters</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>6%</td><td>7 seconds</td><td>8 meters</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>7%</td><td>7 seconds</td><td>8 meters</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>8%</td><td>7 seconds</td><td>8 meters</td><td>11 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/g/trans-leg-it.png" width="64" height="64" alt="Leg It" /></td><td colspan="2"><strong>Leg It</strong><br />Makes you run faster.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Duration</td><td class="width-290">Refresh Time</td></tr>
<tr>
<td>Rank 1:</td><td>4 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>5 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>7 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>9 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>12 seconds</td><td>10 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/g/trans-frenzy-fire.png" width="64" height="64" alt="Frenzy Fire" /></td><td colspan="4"><strong>Frenzy Fire</strong><br />Increases the accuracy of your Machine Gun.</td>
</tr>
<tr>
<td colspan="5"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-140">Accuracy Bonus</td><td class="width-110">Damage Bonus</td><td class="width-100">Duration</td><td class="width-130">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>1 seconds</td><td>0</td><td>3 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>2 seconds</td><td>0</td><td>4 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>3 seconds</td><td>0</td><td>4 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>4 seconds</td><td>1</td><td>5 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>5 seconds</td><td>2</td><td>6 seconds</td><td>10 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/g/trans-explosive-keg.png" width="64" height="64" alt="Explosive Keg" /></td><td colspan="4"><strong>Explosive Keg</strong><br />Hurl a barrel that explodes if you shoot it.</td>
</tr>
<tr>
<td colspan="5"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-090">Damage</td><td class="width-160">Damage Over Time</td><td class="width-100">Radius</td><td class="width-130">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>35</td><td>0</td><td>8 meters</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>40</td><td>0</td><td>10 meters</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>40</td><td>0</td><td>10 meters</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>45</td><td>0</td><td>10 meters</td><td>10 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>45</td><td>12</td><td>10 meters</td><td>10 seconds</td>
</tr>
</table>
<!-- GUNNER ABILITIES - E -->

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
