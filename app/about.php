<!doctype html>
<html lang="en">
    <head>
        <title>Pavone - About</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
		<?php include('includes/styles.php'); ?>
		<style>
			@media screen and (max-width: 900px) {
				.hero {
					background-image: url('img/hero-about-tablet.jpg') !important;
				}
			}
			@media screen and (max-width: 550px) {
				.hero {
					background-image: url('img/hero-about-mobile.jpg') !important;
				}
			}
		</style>
    </head>
    <body class="about">
        <?php include('includes/browserupgrade.php'); ?>
        <div>
			<?php include('includes/header.php'); ?>
			<section class="hero jarallax animatedParent animateOnce" data-jarallax data-speed="0.2" style="background-image: url('img/hero-about-desktop.jpg');">
				<div class="hero__text animated fadeIn">
					<div class="row hero__text__line1">
						<div class="col-md-10 offset-md-1">
							<h1>
								<span class="pushing">
									<div>Pushing</div>
								</span>
								<span class="title-reel">
									<div>
										<span>the team</span>
										<!--<span>the rules</span>
										<span>the team</span>
										<span>the rules</span>
										<span>the team</span>
										<span>the rules</span>
										<span>the team</span>
										<span>the rules</span>
										<span>the team</span>
										<span>the rules</span>
										<span>the team</span>
										<span>the rules</span>
										<span>the team</span>
										<span>the rules</span>-->
									</div>
								</span>
							</h1>
						</div>
					</div>
					<div class="row hero__text__line2">
						<div class="col-md-4 col-sm-6 offset-md-1">
							<div class="hero__text__line2__highlight">
								<h3>Pavone in :60</h3>
							</div>
						</div>
						<div class="col-md-3 offset-md-1">
							<a href="#pavone-in-60" class="btn-circle">
								<span>Watch <br />it</span>
							</a>
							<div class="line"></div>
						</div>
					</div>
				</div>
			</section>
			<main>
				<section class="pavone-in-60" id="pavone-in-60">
					<div class="video" id="about-video">
						<div class="content">
							<iframe src="https://player.vimeo.com/video/320560311?title=0&byline=0&portrit=0" allow="autoplay; fullscreen" allowfullscreen></iframe>
							<div class="video__poster">
								<picture class="video__poster__img">
									<source media="(max-width: 550px)" srcset="img/about-poster-mobile.jpg">
									<source media="(max-width: 900px)" srcset="img/about-poster-tablet.jpg">
									<img src="img/about-poster-desktop.jpg" alt="">
								</picture>
								<div class="btn-circle play-btn">
									<span>Play</span>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="partnerships animatedParent animateOnce" id="partnerships">
					<div class="col-md-2 offset-md-10 section-label-container animated fadeInDown delay-1000">
						<div class="section-label">
							<span class="label-1 section-label__text">Clients</span>
							<div class="section-label__line"></div>
						</div>
					</div>
					<div class="row animated fadeInUp delay-500">
						<div class="col-md-10 offset-md-1">
							<h3 class="text-center">Our <br /><span>Partnerships</span></h3>
							<div class="clients">
								<div class="clients__client">
									<img src="img/omnipod.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/phra.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/kioti.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/insulet.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/drydene.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/pocono.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/geneia.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/theon.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/wxpn.svg" alt="" />
								</div>
								<div class="clients__client">
									<img src="img/hbgu.svg" alt="" />
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="why-bulldog animatedParent animateOnce" id="why-bulldog">
					<div class="col-md-2 offset-md-10 section-label-container animated fadeInDown delay-1000">
						<div class="section-label">
							<span class="label-1 section-label__text">Mascot</span>
							<div class="section-label__line"></div>
						</div>
					</div>
					<div class="col-md-10 offset-md-1">
						<h3 class="text-center animated fadeInUp delay-500"><span>Why</span> a <br />bulldog?</h3>
					</div>
					<div class="row no-gutters">
						<div class="col-md-4 offset-md-8 why-bulldog__bg"></div>
						<div class="col-12">
							<h1 class="marquee-container">
								<span class="marquee-container__marquee-type">Attitude is Everything.</span>
							</h1>
						</div>
						<div class="col-md-3 offset-md-1 why-bulldog__text animatedParent animateOnce">
							<div class="animated fadeInUp delay-500">
								<h5>As a company, we’re not the biggest or the fanciest. But we're no lap dog either. And we never, ever, ever give up. </h5>
								<p>The spirit of the bulldog is alive and well in our agency. Hungry. Fierce. Loyal. Tirelessly tenacous. Fearless and focused. Never doubting or questioning. The qualities we admire in this breed are what you'll admire about us.</p>
								<a href="https://www.instagram.com/princesslunathebulldog" target="_blank">
									<img src="img/instagram-yellow.svg" alt="" />
									Follow our bulldog on IG
								</a>
							</div>
						</div>
						<div class="col-md-6 offset-md-1 why-bulldog__img animatedParent animateOnce">
							<div class="animated fadeInUp delay-500">
								<picture>
									<source media="(max-width: 550px)" srcset="img/bulldog-mobile.jpg">
									<source media="(max-width: 900px)" srcset="img/bulldog-tablet.jpg">
									<img src="img/bulldog-desktop.jpg" alt="" class="parallax">
								</picture>
							</div>
						</div>
					</div>
				</section>
			</main>
			<?php include('includes/footer.php'); ?>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>