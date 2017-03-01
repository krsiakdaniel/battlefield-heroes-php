<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Media - Music</title>
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
	&nbsp;	<a href="media-wallpapers.php"><span class="submenu-1">wallpapers</span></a>
	&nbsp;	<a href="media-music.php"><span class="submenu-2">music</span></a>
	&nbsp;	<a href="media-video.php"><span class="submenu-1">video</span></a>
	&nbsp;	<a href="media-signature.php"><span class="submenu-1">signature</span></a>
     <!-- LEFT SIDE - E -->

     <!-- RIGHT SIDE - S -->
     <?php
     include 'php/components/sub-menu-right-side.php';
     ?>
     <!-- RIGHT SIDE - E -->
	<hr />
	</div>
	<!-- SUB NAVIGATION - E -->

<!-- FAQ HELP - S -->
<p>
In case you can&#39;t see music player - <a href="#" title="Shows possible problems and solution.">display help</a>.
Can&#39;t display the help text ? Visit <a href="#"><span class="text-uppercase">faq</span></a> section to find out how you can turn on
<a href="#">Javascript</a> &#43; <a href="#">Flash</a>.
</p>
<hr />
<!-- FAQ HELP - E -->

<!-- TEXT n PICS - S -->
<!-- HELP BOX - S -->
<div id="show-help-text" class="custom-div-blue">
<p>
In order to see and run player properly you need to have <a href="faq-flash.php">Flash</a> addon in your browser.
</p>
<table>
<tr>
<td colspan="2">
Maybe you ...
</td>
</tr>
<tr>
<td>
<img src="images/icon/32x32/trans-warning.png" width="32" height="32" alt="ERROR" />
</td>
<td>
<ul>
<li>... did not install it yet.</li>
<li>... have old version.</li>
<li>... turned this addon off.</li>
<li>... have Flashblock turned on.</li>
</ul>
</td>
</tr>
</table>

<p>
Visit our &#34;step by step&#34; guides in <a href="faq.php"><span class="text-uppercase">faq</span></a> section to find out more.
<br />
<br />
<a href="http://get.adobe.com/flashplayer/otherversions/" rel="external" title="External Window"><img src="images/icon/trans-flash-player.png" width="105" height="26" alt="Get Flash Player" class="border-none" /></a>
</p>

<hr />
<p>
<a href="javascript:HideContent('show-help-text')"><span class="text-uppercase">hide this text</span></a>
</p>
</div>
<!-- HELP BOX - E -->

<p class="align-c">
<img src="images/logos/logo-trans-music.png" width="270" height="100" alt="MUSIC" class="img-padding" />
</p>

	<!-- MP3 FLASH PLAYER - S -->
	<div id="flashPlayer" class="align-c">
	<!-- HELP BOX - MP3 - S -->
	<div class="custom-div-blue">
	<p>
	In order to see and run player properly you need to have <a href="faq-flash.php">Flash</a> addon in your browser.
	</p>
	<table>
	<tr>
	<td colspan="2">
	Maybe you ...
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/icon/32x32/trans-warning.png" width="32" height="32" alt="ERROR" />
	</td>
	<td>
	<ul>
	<li>... did not install it yet.</li>
	<li>... have old version.</li>
	<li>... turned this addon off.</li>
	<li>... have Flashblock turned on.</li>
	</ul>
	</td>
	</tr>
	</table>

	<p>
	Visit our "step by step" guides in <a href="faq.php"><span class="text-uppercase">faq</span></a> section to find out more.
	<br />
	<br />
	<a href="http://get.adobe.com/flashplayer/otherversions/" rel="external" title="External Window"><img src="images/icon/trans-flash-player.png" width="105" height="26" alt="Get Flash Player" class="border-none" /></a>
	</p>
	</div>
	<!-- HELP BOX - MP3 - E -->

	</div>
	<script type="text/javascript">
	var so = new SWFObject("swf/mp3-player.swf", "mymovie", "200", "200", "7", "#FFFFFF");
	so.addVariable("autoPlay","no")
	so.addVariable("playlistPath","xml/mp3-player-playlist.xml")
	so.write("flashPlayer");
	</script>
	<!-- MP3 FLASH PLAYER - E -->

<br />

<!-- DOWNLOAD - 1 - S -->
<p>
<span class="text-underline"><strong>Battlefield Heroes - Theme</strong></span>
<br />
Battlefield Heroes theme song. This is alteration of Battlefield 1942 theme song with new features and catchy &#34;whistle&#34; theme.
<br />
Length - 03:23 minutes.
</p>
	<p class="custom-div-blue">
	<img src="images/icon/trans-download.png" width="12" height="12" alt="*" class="border-none" />
	<span class="textbold">Download</span> ...
	<a href="downloads/audio/bfhtheme256kbps.zip">256kbps (size 6.20MB)</a>
	</p>
<!-- DOWNLOAD - 1 - E -->

<!-- DOWNLOAD - 2 - S -->
<p>
<span class="text-underline"><strong>Battlefield Heroes - Remix</strong></span>
<br />
This is remix of Battlefield Heroes theme song. You could hear this shortened version in trailer video.
<br />
Length - 02:00 minutes.
</p>
	<p class="custom-div-blue">
	<img src="images/icon/trans-download.png" width="12" height="12" alt="*" class="border-none" />
	<span class="textbold">Download</span> ...
	<a href="downloads/audio/bfhremix256kbps.zip">256kbps (3.68MB)</a>
	</p>
<!-- DOWNLOAD - 2 - E -->

<!-- DOWNLOAD - 3 - S -->
<p>
<span class="text-underline"><strong>Battlefield Heroes - Ringtone</strong></span>
<br />
This is official ringtone of Battlefield Heroes melody  good to have on your mobile phone. It is MP3 so all phones should run it with no problems.
<br />
Length - 00:16 seconds.
</p>
	<p class="custom-div-blue">
	<img src="images/icon/trans-download.png" width="12" height="12" alt="*" class="border-none" />
	<span class="textbold">Download</span> ...
	<a href="downloads/audio/bfhringtone128kbps.zip">128kbps (size 252kB)</a> ... <a href="downloads/audio/bfhringtone256kbps.zip">256kbps (size 504kB)</a> ... <a href="downloads/audio/bfhringtone320kbps.zip">320kbps (size 630kB)</a>
	</p>
<!-- DOWNLOAD - 3 - E -->
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
