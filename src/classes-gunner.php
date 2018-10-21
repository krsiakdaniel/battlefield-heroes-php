<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Classes - Gunner</title>
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

<body onload="window.status='* Webdesign and code by \'Krysak4eveR\' *'">
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
<li><a href="classes.php" class="button-blue">classes</a></li>
<li><a href="abilities.php">abilities</a></li>
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
	<a href="classes-soldier.php"><span class="submenu-1">soldier</span></a>
	&nbsp; <a href="classes-gunner.php"><span class="submenu-2">gunner</span></a>
	&nbsp; <a href="classes-commando.php"><span class="submenu-1">commando</span></a>
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
<img src="images/build-pics/classes/c-g/trans-classes-g.png" width="655" height="423" alt="CLASSES" usemap="#classes" class="border-none img-padding" />
<map name="classes" id="classes">
	<area id="soldier" shape="rect"
	coords="165,355,215,395"
	alt="Royal Army"
	href="classes-soldier.php" />

	<area id="commando" shape="rect"
	coords="560,355,610,395"
	alt="Royal Army"
	href="classes-commando.php" />
</map>
</p>
<!-- COORDS ... LEFT,TOP + RIGHT,BOTTOM - E -->

<!-- GUNNER - S -->
<p>
<strong>Gunner</strong>
<br />
<br />
This is one scary bloke !
Gunner is equipped with huge machine gun and <abbr title="* ROCKET PROPELLED GRENADE * - aka - * BAZOOKA *">rpg</abbr>.
Since this class is missing a medikit it relies on brutal force instead.
<br />
Every gunner can &#34;single handedly&#34; take out any <a href="gameplay-vehicles.php">tank</a> he wants.
</p>
<p>
This big fella uses <a href="abilities-gunner.php#a-g">Hero shield</a> to protect himself.
This shield absorbs any damage from enemies.
To increase their already huge firepower Gunner gets an ability that ensures he will not miss any target.
If you have faith in humongous health and want to run around with no fear choose this guy !
<img src="images/build-pics/classes/c-g/trans-gunners.png" width="512" height="512" alt="GUNNERS" class="float-r" />
</p>

<br />

<div>
<p><strong>Hitpoints: 150</strong></p>
</div>

<div>
<p><strong>Weapons:</strong>
<br />
Starting arsenal of gunner consists of <abbr title="* MACHINE GUN *">mg</abbr>,
<br />
shotgun and bundle of <span class="text-uppercase">tnt</span>.
</p>
<ul>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION">Machine Gun</a></li>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION">Shotgun</a></li>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION">Sticky <span class="text-uppercase">tnt</span></a></li>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION"><span class="text-uppercase">rpg</span></a></li>
</ul>
</div>

<br />
<br />
<br />

<div>
<table cellpadding="5" class="custom-div-blue">
<tr>
<th colspan="2">starting ability</th>
</tr>
<tr>
<td><a href="abilities-gunner.php#a-g"><img src="images/icon/64x64/abilities/g/trans-hero-shield.png" width="64" height="64" alt="Hero Shield" class="border-none" /></a></td>
<td><a href="abilities-gunner.php#a-g"><strong>Hero Shield</strong></a><br />Shield that absorbs damage from enemies.</td>
</tr>
</table>
</div>

<table width="800" class="custom-div-blue">
<tr>
<th colspan="4">gunner abilities</th>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td><a href="abilities-gunner.php#a-g"><img src="images/icon/64x64/abilities/g/trans-hero-shield.png" width="64" height="64" alt="Hero Shield" class="border-none" /></a></td>
<td colspan="2"><a href="abilities-gunner.php#a-g"><strong>Hero Shield</strong></a><br />Shield that absorbs damage from enemies.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td><a href="abilities-gunner.php#a-g"><img src="images/icon/64x64/abilities/g/trans-i-eat-grenades.png" width="64" height="64" alt="I Eat Grenades" class="border-none" /></a></td>
<td colspan="3"><a href="abilities-gunner.php#a-g"><strong>I Eat Grenades</strong></a><br />Gobbles up all nearby explosives for a short duration. Each explosive eaten will heal a % of your total health.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td><a href="abilities-gunner.php#a-g"><img src="images/icon/64x64/abilities/g/trans-leg-it.png" width="64" height="64" alt="Leg It" class="border-none" /></a></td>
<td colspan="2"><a href="abilities-gunner.php#a-g"><strong>Leg It</strong></a><br />Makes you run faster.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td><a href="abilities-gunner.php#a-g"><img src="images/icon/64x64/abilities/g/trans-frenzy-fire.png" width="64" height="64" alt="Frenzy Fire" class="border-none" /></a></td>
<td colspan="2"><a href="abilities-gunner.php#a-g"><strong>Frenzy Fire</strong></a><br />Increases the accuracy of your Machine Gun.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td><a href="abilities-gunner.php#a-g"><img src="images/icon/64x64/abilities/g/trans-explosive-keg.png" width="64" height="64" alt="Explosive Keg" class="border-none" /></a></td>
<td colspan="3"><a href="abilities-gunner.php#a-g"><strong>Explosive Keg</strong></a><br />Hurl a barrel that explodes if you shoot it.</td>
</tr>
</table>
<!-- GUNNER - E -->
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
