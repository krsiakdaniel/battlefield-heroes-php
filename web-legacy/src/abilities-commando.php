<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Abilities - Commando</title>
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
	&nbsp; <a href="abilities-gunner.php"><span class="submenu-1">gunner</span></a>
	&nbsp; <a href="abilities-commando.php"><span class="submenu-2">commando</span></a>
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
<img src="images/build-pics/abilities/a-c/trans-abilities-c.png" width="655" height="423" alt="ABILITIES" usemap="#abilities" class="border-none img-padding" />
<map name="abilities" id="abilities">
	<area id="soldier" shape="rect"
	coords="165,355,215,395"
	alt="Royal Army"
	href="abilities-soldier.php" />

	<area id="gunner" shape="rect"
	coords="365,355,415,395"
	alt="Royal Army"
	href="abilities-gunner.php" />
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
<!-- COMMANDO ABILITIES - S -->
<table width="800" class="custom-div-blue" id="a-c">
<tr>
<th colspan="4">COMMANDO ABILITIES</th>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td><img src="images/icon/64x64/abilities/c/trans-elixir.png" width="64" height="64" alt="Elixir" /></td><td colspan="3"><strong>Elixir</strong><br />Increases your run speed for a short time.</td>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Shield Value</td><td class="width-170">Duration</td><td class="width-120">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>10</td><td>5 seconds</td><td>15 seconds</td>

</tr>
<tr>
<td>Rank 2:</td><td>15</td><td>5 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>20</td><td>5 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>25</td><td>5 seconds</td><td>13 seconds</td>

</tr>
<tr>
<td>Rank 5:</td><td>35</td><td>5 seconds</td><td>10 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/c/trans-poisoned-blade.png" width="64" height="64" alt="Poisoned Blade" /></td><td colspan="3"><strong>Poisoned Blade</strong><br />Damage from the knife causes the victim to be poisoned losing health over a certain period of time.</td>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Damage over Time</td><td class="width-170">Duration</td><td class="width-120">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>15</td><td>5 seconds</td><td>15 seconds</td>
</tr>
<tr>

<td>Rank 2:</td><td>21</td><td>5 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>27</td><td>5 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>36</td><td>5 seconds</td><td>13 seconds</td>

</tr>
<tr>
<td>Rank 5:</td><td>45</td><td>7 seconds</td><td>10 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/c/trans-mark-target.png" width="64" height="64" alt="Mark Target" /></td><td colspan="2"><strong>Mark Target</strong><br />Receive points for designating enemy targets for your team.</td>
</tr>
<tr>

<td colspan="3"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Marked Time</td><td class="width-290">Refresh Time</td></tr>
<tr>
<td>Rank 1:</td><td>8 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>9 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>10 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>11 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>12 seconds</td><td>10 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/c/trans-stealth.png" width="64" height="64" alt="Stealth" /></td><td colspan="2"><strong>Stealth</strong><br />Hide yourself from your enemies.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Radius</td><td class="width-290">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>15 m</td><td>25 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>13 m</td><td>23 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>11 m</td><td>20 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>9 m</td><td>17 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>6 m</td><td>12 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/c/trans-troop-trap.png" width="64" height="64" alt="Troop Trap" /></td><td colspan="2"><strong>Troop Trap</strong><br />Place an explosive that will trigger when enemies approach too close or when shot.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Explosion Damage</td><td class="width-290">Refresh Time</td></tr>
<tr>
<td>Rank 1:</td><td>30</td><td>23 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>35</td><td>21 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>40</td><td>18 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>45</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>50</td><td>12 seconds</td>
</tr>
</table>

<br />

<table width="800" class="custom-div-blue">
<tr>
<td><img src="images/icon/64x64/abilities/c/trans-piercing-shot.png" width="64" height="64" alt="Piercing Shot" /></td><td colspan="3"><strong>Piercing Shot</strong><br />Increase the damage done by your sniper rifle.</td>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td class="width-080"></td><td class="width-180">Increase Damage</td><td class="width-170">Duration</td><td class="width-120">Refresh Time</td>
</tr>
<tr>
<td>Rank 1:</td><td>13</td><td>5 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 2:</td><td>15</td><td>6 seconds</td><td>15 seconds</td>
</tr>
<tr>
<td>Rank 3:</td><td>17</td><td>7 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 4:</td><td>19</td><td>7 seconds</td><td>13 seconds</td>
</tr>
<tr>
<td>Rank 5:</td><td>23</td><td>7 seconds</td><td>10 seconds</td>
</tr>
</table>
<!-- COMMANDO ABILITIES - E -->

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
