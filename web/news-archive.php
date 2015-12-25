<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - News Archive</title>
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
<li><a href="index.php" id="home">home</a></li>
<li><a href="armies.php">armies</a></li>
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
	<a href="news-archive.php"><span class="submenu-2">News Archive</span></a>
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
<p class="custom-div-blue">
<strong><sub>2009 *</sub> july</strong>
</p>

<p class="custom-div-blue">
<strong><sub>2009 *</sub> june</strong>
</p>

<p class="custom-div-blue">
<strong><sub>2009 *</sub> may</strong>
</p>

<p class="custom-div-blue">
<strong><sub>2009 *</sub> april</strong>
</p>

<p class="custom-div-blue">
<strong><sub>2009 *</sub> march</strong>
</p>

<p class="custom-div-blue">
<strong><sub>2009 *</sub> february</strong>
</p>

<p class="custom-div-blue">
<strong><sub>2009 *</sub> january</strong>
</p>
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
