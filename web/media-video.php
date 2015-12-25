<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Media - Video</title>
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
	&nbsp;	<a href="media-music.php"><span class="submenu-1">music</span></a>
	&nbsp;	<a href="media-video.php"><span class="submenu-2">video</span></a>
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
In case you can&#39;t see video player - <a href="#" title="Shows possible problems and solution.">display help</a>.
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
<img src="images/logos/logo-trans-video.png" width="270" height="100" alt="VIDEO" class="img-padding" />
</p>

<p class="align-c">
<object width="500" height="315"><param name="movie" value="http://www.youtube.com/v/kxF-VH6eRXM&#38;&#104;l=cs&#38;&#102;s&#61;1&#38;&#99;olor1=0x3a3a3a&#38;&#99;olor2=0x999999&#38;&#98;order&#61;1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/kxF-VH6eRX&#77;&#38;&#104;l&#61;cs&fs=1&color1=0x3a3a3a&color2=0x999999&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="500" height="315"></embed></object>
</p>


<br />
	<hr />
<br />

<div class="custom-div-blue">
<table>
<tr>
<td>
<a href="http://www.youtube.com/foxcompanychannel" rel="external" title="External Window">
<img src="images/icon/64x64/trans-y1.png" width="64" height="64" alt="Youtube channel" class="img-padding border-none" />
</a>
</td>
<td>
Visit <a href="http://www.youtube.com/bfheroes" rel="external" title="External Window">Youtube Channel - Battlefield Heroes</a> in order to see more Battlefield Heroes related videos.
</td>
</tr>
</table>
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
