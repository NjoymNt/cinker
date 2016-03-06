<?php

$blackTxt = "black-txt";
$blackLogo = "img/logo-black.png";
$whiteLogo = "img/logo-white.png";

?>

<div class="container-fluid menu-holder pd0">
	<div class="container width-override">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="logo">
					<a href="index.php"><img src="<?php if($subpage==1) {echo $blackLogo;} else {echo $whiteLogo;}; ?>" alt="cinker-logo" class="pull-left"/></a>
				</div>

				<ul class="top-right-info-ul before-after subpage-menu">
					<li class="hidden-xs"><a href="#"><b>ENG</b></a></li>
					<li class="hidden-xs"><a href="#"><b>CHI</b></a></li>
					<li id="topBarTime">2016. 3. 4 12:42</li>
					<li><a href="#">LOGIN</a></li>
					<li><a href="#">SIGNUP</a></li>
					<li class="hidden-lg hidden-md hidden-sm"><i class="fa fa-bars fa-3x sb-toggle-right"></i></li>
				</ul>

				<ul class="top-right-nav hidden-xs <?php if($subpage==1) echo $blackTxt; ?>">
					<li><a href="index.php" class="">MOVIES</a></li>
					<li><a href="events.php" class="">EVENTS</a></li>
					<li><a href="#">GALLERY</a></li>
					<li><a href="#contact" class="">CONTACT</a></li>
					<li><a href="#" class="">SUBSCRIBE</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

