<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Classes - Soldier</title>
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
	<a href="classes-soldier.php"><span class="submenu-2">soldier</span></a>
	&nbsp; <a href="classes-gunner.php"><span class="submenu-1">gunner</span></a>
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
<img src="images/build-pics/classes/c-s/trans-classes-s.png" width="655" height="423" alt="CLASSES" usemap="#classes" class="border-none img-padding" />
<map name="classes" id="classes">
	<area id="gunner" shape="rect"
	coords="365,355,415,395"
	alt="Royal Army"
	href="classes-gunner.php" />

	<area id="commando" shape="rect"
	coords="560,355,610,395"
	alt="Royal Army"
	href="classes-commando.php" />
</map>
</p>
<!-- COORDS ... LEFT,TOP + RIGHT,BOTTOM - E -->

<!-- SOLDIER - S -->
<p>
<strong>Soldier</strong>
<br />
<br />
Durable, hard, combat veteran. Experienced marksman who knows where to hit to deal real damage.
Soldier lacks the firepower of Gunner and has no sneaky ability like Commando does but he relies on his field medikit. He is skilled healer able to heal others including himself !
</p>
<p>
Soldier relies on his ability to survive. 
Great firepower is good thing but when you can heal yourself during combat that&#39;s something totally else !
<br />
And finally the biggest merit of each soldier is that he can throw <a href="abilities-soldier.php#a-s">Grenade spam</a> at his enemies. Yes you hear well &#34;clusters of grenades&#34; !
<img src="images/build-pics/classes/c-s/trans-soldiers.png" width="512" height="512" alt="SOLDIERS" class="float-r" />
</p>

<br />

<div>
<p><strong>Hitpoints: 110</strong></p>
</div>

<div>
<p><strong>Weapons:</strong>
<br />
Starting arsenal of soldier consists of <abbr title="* SUBMACHINE GUN *">smg</abbr>,
<br />
shotgun and bundle of <span class="text-uppercase">tnt</span>.
</p>
<ul>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION"><span class="text-uppercase">smg</span></a></li>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION">Shotgun</a></li>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION">Sticky <span class="text-uppercase">tnt</span></a></li>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION">Pistol</a></li>
<li><a href="#" title="GO TO WIKIA TO SEE FULL DESCRIPTION">Single grenade</a></li>
</ul>
</div>

<br />
<br />

<div>
<table cellpadding="5" class="custom-div-blue">
<tr>
<th colspan="2">starting ability</th>
</tr>
<tr>
<td><a href="abilities-soldier.php#a-s"><img src="images/icon/64x64/abilities/s/trans-combat-medicine.png" width="64" height="64" alt="Combat Medicine" class="border-none" /></a></td>
<td><strong><a href="abilities-soldier.php#a-s">Combat Medicine</a></strong><br />Instantly heal yourself and all nearby team mates.</td>
</tr>
</table>
</div>

<table width="800" class="custom-div-blue">
<tr>
<th colspan="4">soldier abilities</th>
</tr>
<tr>
<td colspan="4"><hr /></td>
</tr>
<tr>
<td><a href="abilities-soldier.php#a-s"><img src="images/icon/64x64/abilities/s/trans-blasting-strike.png" width="64" height="64" alt="Blasting Strike" class="border-none" /></a></td>
<td colspan="2"><a href="abilities-soldier.php#a-s"><strong>Blasting Strike</strong></a><br />Knock back all near by enemies and vehicles.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td><a href="abilities-soldier.php#a-s"><img src="images/icon/64x64/abilities/s/trans-combat-medicine.png" width="64" height="64" alt="Combat Medicine" class="border-none" /></a></td>
<td colspan="3"><a href="abilities-soldier.php#a-s"><strong>Combat Medicine</strong></a><br />Instantly heal yourself and all nearby team mates. The amount you are healed will go up for each team mate healed.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td><a href="abilities-soldier.php#a-s"><img src="images/icon/64x64/abilities/s/trans-grenade-spam.png" width="64" height="64" alt="Grenade Spam" class="border-none" /></a></td>
<td colspan="2"><a href="abilities-soldier.php#a-s"><strong>Grenade Spam</strong></a><br />Throw multiple grenades at once!</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td><a href="abilities-soldier.php#a-s"><img src="images/icon/64x64/abilities/s/trans-6th-sense.png" width="64" height="64" alt="6th Sense" class="border-none" /></a></td>
<td colspan="2"><a href="abilities-soldier.php#a-s"><strong>6th Sense</strong></a><br />See all enemies for a short period of time.</td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td><a href="abilities-soldier.php#a-s"><img src="images/icon/64x64/abilities/s/trans-burning-bullets.png" width="64" height="64" alt="Burning Bullets" class="border-none" /></a></td>
<td colspan="3"><a href="abilities-soldier.php#a-s"><strong>Burning Bullets</strong></a><br />Shots fired from your SMG set enemies on fire.</td>
</tr>
</table>
<!-- SOLDIER - E -->
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
