<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

	<?php
	include_once 'php/components/copyright.php';
	?>


<head>
	<title>BF Heroes - Gameplay - Widgets</title>
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
<li><a href="gameplay.php" class="button-blue">gameplay</a></li>
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
	<a href="gameplay-appearance.php"><span class="submenu-1">appearance</span></a>
	&nbsp; <a href="gameplay-maps.php"><span class="submenu-1">maps</span></a>
	&nbsp; <a href="gameplay-vehicles.php"><span class="submenu-1">vehicles</span></a>
	&nbsp; <a href="gameplay-widgets.php"><span class="submenu-2">widgets</span></a>
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
<img src="images/logos/logo-trans-widgets.png" width="270" height="100" alt="WIDGETS" class="img-padding" />
</p>

<div>
<img src="images/icon/64x64/widgets/bandage.png" width="64" height="64" alt="Bandage" class="custom-div-blue float-l" />
<p>
&nbsp;&nbsp;&nbsp;<strong>Bandage</strong>
<br />
&nbsp;&nbsp;&nbsp; Restores a portion of your health over time.
<br />
&nbsp;&nbsp;&nbsp; Stops burning and poison effects. Any damage taken will cancel the bandage.
<br />
<br />
&nbsp;&nbsp;&nbsp; <strong>Details</strong> ... There are <strong>5</strong> levels of bandage in total.
</p>
</div>
	<hr />
<div>
<img src="images/icon/64x64/widgets/wrench.png" width="64" height="64" alt="Wrench" class="custom-div-blue float-l" />
<p>
&nbsp;&nbsp;&nbsp;<strong>Wrench</strong>
<br />
&nbsp;&nbsp;&nbsp; Repairs a portion of your vehicle armor over time.
<br />
&nbsp;&nbsp;&nbsp; Any damage taken will cancel the effect.
<br />
<br />
&nbsp;&nbsp;&nbsp; <strong>Details</strong> ... There are <strong>5</strong> levels of wrench in total.
</p>
</div>
	<hr />
<div>
<img src="images/icon/64x64/widgets/vp.png" width="64" height="64" alt="VP boost" class="custom-div-blue float-l" />
<p>
&nbsp;&nbsp;&nbsp;<strong>VP boost</strong>
<br />
&nbsp;&nbsp;&nbsp; Increases Valor Point gain to 200&#37;.
<br />
&nbsp;&nbsp;&nbsp; This item does not need to be equipped.
<br />
<br />
&nbsp;&nbsp;&nbsp; <strong>Details</strong> ... Duration starts upon item purchase.
</p>
</div>
	<hr />
<div>
<img src="images/icon/64x64/widgets/xp.png" width="64" height="64" alt="XP boost" class="custom-div-blue float-l" />
<p>
&nbsp;&nbsp;&nbsp;<strong>XP boost</strong>
<br />
&nbsp;&nbsp;&nbsp; Increases experience gain to 150&#37;.
<br />
&nbsp;&nbsp;&nbsp; This item does not need to be equipped.
<br />
<br />
&nbsp;&nbsp;&nbsp; <strong>Details</strong> ... Duration starts upon item purchase.
</p>
</div>

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
