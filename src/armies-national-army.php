<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Armies - National Army</title>
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
<li><a href="armies.php" class="button-blue">armies</a></li>
<li><a href="classes.php">classes</a></li>
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
	<a href="armies-royal-army.php"><span class="submenu-1">Royal Army</span></a>
	&nbsp; <a href="armies-national-army.php"><span class="submenu-2">National Army</span></a>
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
<img src="images/build-pics/armies/national-army/trans-armies-baw-r.png" width="655" height="423" alt="NATIONAL ARMY" usemap="#national" class="border-none img-padding" />
<map name="national" id="national">
	<area id="royal-army" shape="rect"
	coords="225,350,285,400"
	alt="Royal Army"
	href="armies-royal-army.php" />
</map>
</p>
<!-- COORDS ... LEFT,TOP + RIGHT,BOTTOM - E -->

<img src="images/build-pics/armies/national-army/trans-national-flag.png" width="142" height="146" alt="National Flag" class="float-l img-padding" />
<br />
<strong>National Army</strong>
<p>
There are two factions, the <a href="armies-royal-army.php">Royals</a> and the <a href="armies-national-army.php">Nationals</a>.
<br />
<br />
The main difference between both factions is in their <a href="gameplay-appearance.php">appearance</a>, what emotes they use, what clothes they wear plus all the items they can buy and equip.
<br />
Both factions are equal. Well for instance we could mention weapons - <abbr title="* SUBMACHINE GUN *">smg</abbr> does the same damage when you play as a Royal soldier or a National soldier.
You will be able to recognise your own team mates by the blue name above their heads and when your gun is pointed at them a blue cross will appear.
<br />
Anybody who is red just shoot him !
</p>

<br />
<br />

<table class="custom-div-blue" border="0" width="804">
<tr>
<td class="t-td-50">
<img src="images/icon/32x32/32x32-trans-n-flag.png" width="32" height="32" alt="National Army" />
</td>
<th class="t-th-754">
<hr />
Each faction has the same classes
<hr />
</th>
</tr>
</table>

<br />

<table class="custom-div-blue" border="0">
<tr>
<th>
<a href="classes-soldier.php">Soldier</a>
</th>
<th>
<a href="classes-gunner.php">Gunner</a>
</th>
<th>
<a href="classes-commando.php">Commando</a>
</th>
</tr>
<tr>
<td>
<a href="classes-soldier.php"><img src="images/build-pics/armies/national-army/trans-soldier-n.png" width="256" height="256" alt="SOLDIER" class="border-none" /></a>
</td>
<td>
<a href="classes-gunner.php"><img src="images/build-pics/armies/national-army/trans-gunner-n.png" width="256" height="256" alt="GUNNER" class="border-none" /></a>
</td>
<td>
<a href="classes-commando.php"><img src="images/build-pics/armies/national-army/trans-commando-n.png" width="256" height="256" alt="COMMANDO" class="border-none" /></a>
</td>
</tr>
</table>
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
