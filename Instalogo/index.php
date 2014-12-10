<?php
	include('lang.en.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>instalogo</title>
		<link href="assets/css/fonts.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bjqs.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
		<link href="assets/css/retina.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/bjqs-1.3.min.js"></script>
		<script type="text/javascript" src="assets/js/skrollr.min.js"></script>
		<script type="text/javascript" src="assets/js/js.js"></script>
	</head>
	<body>
		<section class="welcome-section">
			<div class="bg-layer" data-0="transform: translateY(-200px);" data-top-bottom="transform: translateY(0px);"></div>
			<div class="content">
				<div class="logo"><img src="assets/images/logo@2x.png" alt="instalogo"></div>
				<h2><?php echo lang('WELCOME_TEXT');?></h2>
				<div class="app-store"><?php echo lang('APP_STORE');?></div>
			</div>
			<div class="welcome-phones"></div>
		</section>
		<header>
			<div class="wrap">
				<a href="#" class="header-logo"><img src="assets/images/header-logo@2x.png" alt="instalogo"></a>
				<ul class="social-list">
					<li><a href="#" class="fb-icon use-sprite"></a></li>
					<li><a href="#" class="twitter-icon use-sprite"></a></li>
					<li><a href="#" class="google-icon use-sprite"></a></li>
				</ul>
				<nav>
					<a href="#how-it-works" class="how-it-works"><?php echo lang('HOW_IT_WORKS');?></a>
					<a href="#how-to-video" class="how-to-video"><?php echo lang('HOW_TO_VIDEO');?></a>
					<a href="#tips-tricks" class="tips-tricks"><?php echo lang('TIPS_TRICKS');?></a>
					<a href="#porfolio" class="porfolio"><?php echo lang('PORTFOLIO');?></a>
					<a href="#contact-us" class="contact-us"><?php echo lang('CONTACT_US');?></a>
				</nav>
			</div>
		</header>
		<div class="header-spacer"></div>
		<section id="how-it-works" class="simple-section">
			<h2><?php echo lang('HOW_IT_WORKS');?></h2>
			<div class="wrap clear">
				<div class="how-it-works-block block-step-1" data-100-bottom="opacity: 0; transform: translateY(150px);" data--50-bottom="opacity: 1; transform: translateY(0px);" data--100-bottom="opacity: 1; transform: translateY(-25px);" data--150-bottom="opacity: 1; transform: translateY(0px);">
					<div class="icon use-sprite"></div>
					<h4><?php echo lang('STEP');?> 1</h4>
					<h3><?php echo lang('GO_CREATE');?></h3>
					<p><?php echo lang('STEP1_TEXT');?></p>
				</div>
				<div class="how-it-works-block block-step-2" data-50-bottom="opacity: 0; transform: translateY(150px);" data--100-bottom="opacity: 1; transform: translateY(0px);" data--150-bottom="opacity: 1; transform: translateY(-25px);" data--200-bottom="opacity: 1; transform: translateY(0px);">
					<div class="icon use-sprite"></div>
					<h4><?php echo lang('STEP');?> 2</h4>
					<h3><?php echo lang('ADJUST_MODIFY');?></h3>
					<p><?php echo lang('STEP2_TEXT');?></p>
				</div>
				<div class="how-it-works-block block-step-3" data-bottom="opacity: 0; transform: translateY(150px);" data--150-bottom="opacity: 1; transform: translateY(0px);" data--200-bottom="opacity: 1; transform: translateY(-25px);" data--250-bottom="opacity: 1; transform: translateY(0px);">
					<div class="icon use-sprite"></div>
					<h4><?php echo lang('STEP');?> 3</h4>
					<h3><?php echo lang('SAVE_SHARE');?></h3>
					<p><?php echo lang('STEP3_TEXT');?></p>
				</div>
			</div>
		</section>
		<section class="rating-section">
			<div class="bg-layer" data-bottom-top="transform: translateY(-125px);" data-top-bottom="transform: translateY(0px);"></div>
			<div class="content">
				<div id="ratings-slideshow">
				    <ul class="bjqs">
				        <li>
				        	<div class="stars-list">
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        </div>
					        <q><?php echo lang('RATING_TEXT');?></q>
							<h6>Benjtee</h6>
				        </li>
				        <li>
				        	<div class="stars-list">
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        </div>
					        <q><?php echo lang('RATING_TEXT');?></q>
							<h6>Benjtee</h6>
				        </li>
				        <li>
				        	<div class="stars-list">
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        </div>
					        <q><?php echo lang('RATING_TEXT');?></q>
							<h6>Benjtee</h6>
				        </li>
				        <li>
				        	<div class="stars-list">
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        </div>
					        <q><?php echo lang('RATING_TEXT');?></q>
							<h6>Benjtee</h6>
				        </li>
				        <li>
				        	<div class="stars-list">
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        	<div class="use-sprite"></div>
					        </div>
					        <q><?php echo lang('RATING_TEXT');?></q>
							<h6>Benjtee</h6>
				        </li>
				    </ul>
				</div>
				<div id="ratings-mobile">
			
						<div class="stars-list">
				        	<div class="use-sprite"></div>
				        	<div class="use-sprite"></div>
				        	<div class="use-sprite"></div>
				        	<div class="use-sprite"></div>
				        	<div class="use-sprite"></div>
				        </div>

				        <q><?php echo lang('RATING_TEXT');?></q>
						<h6>Benjtee</h6>

				</div>
				<div class="wrap">
				<a href="#" class="rating-button left-button"><?php echo lang('INTERESTED');?></a>
				<a href="#" class="rating-button right-button"><?php echo lang('ALREADY_USER');?></a>
				</div>
			</div>
		</section>
		<section id="how-to-video" class="simple-section how-to-video-section">
			<h2><?php echo lang('WATCH_OUR_TITLE');?></h2>
			<div class="video-ipad">
				<div class="video-ipad-wrap">
				<iframe width="640" height="360" src="//www.youtube.com/embed/OMOVFvcNfvE" frameborder="0" allowfullscreen></iframe>
			</div>
			</div>
		</section>
		<section id="tips-tricks" class="simple-section trips-trick-section">
			<h2><?php echo lang('TIPS_AND_TRICKS_TITLE');?></b></h2>
			<div class="wrap clear">
				<div class="tips-tricks-block" data-100-bottom="opacity: 0; transform: translateY(150px);" data--50-bottom="opacity: 1; transform: translateY(0px);" data--100-bottom="opacity: 1; transform: translateY(-25px);" data--150-bottom="opacity: 1; transform: translateY(0px);">
					<div class="icon use-sprite"></div>
					<p><?php echo lang('TIP1');?></p>
				</div>
				<div class="tips-tricks-block" data-70-bottom="opacity: 0; transform: translateY(150px);" data--80-bottom="opacity: 1; transform: translateY(0px);" data--130-bottom="opacity: 1; transform: translateY(-25px);" data--180-bottom="opacity: 1; transform: translateY(0px);">
					<div class="icon use-sprite"></div>
					<p><?php echo lang('TIP2');?></p>
				</div>
				<div class="tips-tricks-block" data-40-bottom="opacity: 0; transform: translateY(150px);" data--110-bottom="opacity: 1; transform: translateY(0px);" data--160-bottom="opacity: 1; transform: translateY(-25px);" data--210-bottom="opacity: 1; transform: translateY(0px);">
					<div class="icon use-sprite"></div>
					<p><?php echo lang('TIP3');?></p>
				</div>
				<div class="tips-tricks-block" data-10-bottom="opacity: 0; transform: translateY(150px);" data--140-bottom="opacity: 1; transform: translateY(0px);" data--190-bottom="opacity: 1; transform: translateY(-25px);" data--240-bottom="opacity: 1; transform: translateY(0px);">
					<div class="icon use-sprite"></div>
					<p><?php echo lang('TIP4');?></p>
				</div>
				<div class="tips-tricks-block" data--10-bottom="opacity: 0; transform: translateY(150px);" data--170-bottom="opacity: 1; transform: translateY(0px);" data--210-bottom="opacity: 1; transform: translateY(-25px);" data--270-bottom="opacity: 1; transform: translateY(0px);">
					<div class="icon use-sprite"></div>
					<p><?php echo lang('TIP5');?></p>
				</div>
			</div>
		</section>
		<section id="porfolio" class="simple-section porfolio-section">
			<div class="bg-layer" data-bottom-top="transform: translateY(-80px);" data-top-bottom="transform: translateY(0px);"></div>
			<div class="content">
				<h2><?php echo lang('PORTFOLIO_TITLE');?></b></h2>
				<div id="portfolio-slideshow">
				    <ul class="bjqs">
				        <li>
				        	<img src="assets/images/phone-slides/slide-1-phone-1@2x.png" />
				        	<img src="assets/images/phone-slides/slide-1-phone-2@2x.png" />
				        	<img src="assets/images/phone-slides/slide-1-phone-3@2x.png" />
				        </li>
				        <li>
				        	<img src="assets/images/phone-slides/slide-2-phone-1@2x.png" />
				        	<img src="assets/images/phone-slides/slide-2-phone-2@2x.png" />
				        	<img src="assets/images/phone-slides/slide-2-phone-3@2x.png" />
				        </li>
				        <li>
				        	<img src="assets/images/phone-slides/slide-3-phone-1@2x.png" />
				        	<img src="assets/images/phone-slides/slide-3-phone-2@2x.png" />
				        	<img src="assets/images/phone-slides/slide-3-phone-3@2x.png" />
				        </li>

				    </ul>
				</div>
				<div id="portfolio-picture">
					<img src="assets/images/phone-slides/slide-1-phone-1@2x.png" />
				</div>
			</div>
		</section>
		<section id="contact-us" class="simple-section contact-us-section">
			<h2><b><?php echo lang('CONTACT_US_TITLE');?></h2>
			<div class="wrap clear">
				<p><?php echo lang('QUESTION');?></p>
				<form method="post" action="/instalogo/email.php" name="emailform">
					<input name="name" type="text" class="name-input" id="name-input" placeholder="Your name" data-bottom-top="opacity: 0; transform: translate3d(-200px, 0px, 0px);" data-300-end="opacity: 1; transform: translate3d(0px, 0px, 0px);" />
					<input name="email" type="text" class="mail-input" id="mail-input" placeholder="Your mail address" data-bottom-top="opacity: 0; transform: translate3d(200px, 0px, 0px);" data-300-end="opacity: 1; transform: translate3d(0px, 0px, 0px);" />
					<div class="clear"></div>
					<textarea name="message" placeholder="Your message" id="message-input" data-bottom-top="opacity: 0; transform: translate3d(0px, 200px, 0px);" data-300-end="opacity: 1; transform: translate3d(0px, 0px, 0px);"></textarea>
					<input type="submit" value="send the message" data-bottom-top="opacity: 0; transform: translate3d(0px, 200px, 0px);" data-300-end="opacity: 1; transform: translate3d(0px, 0px, 0px);" />
				</form>
			</div>
		</section>
		<footer>
			<div class="wrap">
				<a href="#" class="header-logo"><img src="assets/images/header-logo@2x.png" alt="instalogo"></a>
				<p><?php echo lang('COPYRIGHT');?></p>
				<ul class="social-list">
					<li><a href="#" class="fb-icon use-sprite"></a></li>
					<li><a href="#" class="twitter-icon use-sprite"></a></li>
					<li><a href="#" class="google-icon use-sprite"></a></li>
				</ul>
			</div>
		</footer>
	</body>
</html>