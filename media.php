<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Media</title>
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
<li><a href="media.php" class="button-blue">media</a></li>
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
	<a href="media-screenshots.php"><span class="submenu-1">screenshots</span></a>
	&nbsp; <a href="media-wallpapers.php"><span class="submenu-1">wallpapers</span></a>
	&nbsp; <a href="media-music.php"><span class="submenu-1">music</span></a>
	&nbsp; <a href="media-video.php"><span class="submenu-1">video</span></a>
	&nbsp; <a href="media-signature.php"><span class="submenu-1">signature</span></a>
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
<p class="align-c">
<img src="images/logos/logo-trans-media.png" width="270" height="100" alt="MEDIA" class="img-padding" />
</p>

<br />
<br />
<br />

<table>
<tr>
<td>
<a href="media-screenshots.php">
<img src="images/logos/logo-trans-screenshots.png" width="270" height="100" alt="SCREENSHOTS" class="border-none img-padding" />	
</a>
</td>
<td>
<ul class="list-square">
<li><strong>Lightbox gallery</strong></li>
<li><strong>Gameplay screenshots</strong></li>
<li><strong>Ingame pictures</strong></li>

</ul>
</td>
</tr>
</table>

<table>
<tr>
<td>
<a href="media-wallpapers.php">
<img src="images/logos/logo-trans-wallpapers.png" width="270" height="100" alt="WALLPAPERS" class="border-none img-padding" />
</a>
</td>
<td>
<ul class="list-square">
<li><strong>Colourfull posters</strong></li>
<li><strong>High-res wallpapers</strong></li>
<li><strong>BFH - official art</strong></li>
</ul>
</td>
</tr>
</table>

<table>
<tr>
<td>
<a href="media-music.php">
<img src="images/logos/logo-trans-music.png" width="270" height="100" alt="MUSIC" class="border-none img-padding" />
</a>
</td>
<td>
<ul class="list-square">
<li><strong>BFH - Theme song</strong></li>
<li><strong>BFH - Remix</strong></li>
<li><strong>BFH - Ringtone</strong></li>
</ul>
</td>
</tr>
</table>

<table>
<tr>
<td>
<a href="media-video.php">
<img src="images/logos/logo-trans-video.png" width="270" height="100" alt="VIDEO" class="border-none img-padding" />
</a>
</td>
<td>
<ul class="list-square">
<li><strong>BFH - Trailers</strong></li>
<li><strong>Fan movies</strong></li>
<li><strong>Misc videos</strong></li>

</ul>
</td>
</tr>
</table>

<table>
<tr>
<td>
<a href="media-signature.php">
<img src="images/logos/logo-trans-signature.png" width="270" height="100" alt="SIGNATURE" class="border-none img-padding" />
</a>
</td>
<td>
<ul class="list-square">
<li><strong>Signature generators</strong></li>
<li><strong>Examples</strong></li>
<li><strong>Manuals</strong></li>
</ul>
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
