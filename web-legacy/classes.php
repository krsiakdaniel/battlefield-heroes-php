<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Classes</title>
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
<img src="images/build-pics/classes/trans-classes.png" width="655" height="423" alt="CLASSES" usemap="#classes" class="border-none img-padding" />
<map name="classes" id="classes">
	<area id="soldier" shape="rect"
	coords="165,355,215,395"
	alt="Royal Army"
	href="classes-soldier.php" />

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
