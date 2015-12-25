<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>Error 404</title>
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
	<div id="tbox-border-white">
	<div id="tbox-auto">
	<!-- SUB NAVIGATION - S -->
	<div>
     <!-- LEFT SIDE - S -->
	Whoops !
	<!-- LEFT SIDE - E -->
     <hr />
	</div>
	<!-- SUB NAVIGATION - E -->

<!-- TEXT n PICS - S -->
<p class="align-c">
<img src="images/logos/logo-trans-404.png" width="270" height="100" alt="ERROR 404 !" class="img-padding" />
</p>

<div class="custom-div-yellow">
<abbr title="* Target you were aiming to is gone ! *">Error 404</abbr> <strong>- Page not found !</strong>
</div>

<br />

<div class="custom-div-yellow">
<table>
<tr>
<td>
<img src="images/build-pics/404/trans-404.png" width="190" height="160" alt="INFO" class="img-padding" />
</td>
<td>
<ul class="list-square">
<li>Requested site was not displayed because it can be simply <abbr title="* 1.) Typographical error. ... 2.) Misspelled word. *">typo</abbr> you have done.</li>
<li>You have typed address in browser directly - check wheter it was correctly or not.</li>
<li>It can be some random <abbr title="* 1.) Wrong link. ... 2.) Missing page on server. *">glitch</abbr> in system as well.</li>
</ul>
</td>
</tr>
</table>
</div>

<br />

<div class="custom-div-blue">
<strong>Use any of the following links:</strong>
</div>

<br />

<?php
include 'php/components/site-map.php';
?>
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
