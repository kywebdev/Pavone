<!doctype html>
<html lang="en">
    <head>
        <title>Pavone - Home</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
		<?php include('includes/styles.php'); ?>
		<style>
			@media screen and (max-width: 900px) {
				.hero {
					background-image: url('img/hero-home-tablet.jpg') !important;
				}
			}
			@media screen and (max-width: 550px) {
				.hero {
					background-image: url('img/hero-home-mobile.jpg') !important;
				}
			}
		</style>
    </head>
    <body class="home">
        <?php include('includes/browserupgrade.php'); ?>
        <div>
			<?php include('includes/header.php'); ?>
			<section class="hero jarallax animatedParent animateOnce" data-jarallax data-speed="0.2" style="background-image: url('img/hero-home-desktop.jpg');">
				<div class="hero__text animated fadeIn">
					<div class="row hero__text__line1">
						<div class="col-md-10 offset-md-1">
							<h1>
								<span class="pushing">
									<div>Pushing</div>
								</span>
								<span class="title-reel">
									<div>
										<!--<span>the thinking</span>
										<span>the work</span>
										<span>limits</span>
										<span>our team</span>
										<span>our clients</span>
										<span>for results</span>
										<span>each other</span>
										<span>for more</span>
										<span>for better</span>
										<span>the insights</span>
										<span>what's interesting</span>
										<span>for the fun of it</span>
										<span>because we love it</span>-->
										<span>what's possible</span>
									</div>
								</span>
							</h1>
						</div>
					</div>
					<div class="row hero__text__line2">
						<div class="col-md-6 col-sm-7 offset-md-1">
							<div class="hero__text__line2__highlight">
								<h3>That's bulldogged.</h3>
							</div>
						</div>
						<div class="col-md-3 offset-md-1">
							<a href="#bulldogged-is" class="btn-circle">
								<span>Let us <br />explain</span>
							</a>
							<div class="line"></div>
						</div>
					</div>
				</div>
				<div class="row hero__bottom animated fadeIn">
					<div class="col-md-7 offset-md-1 hero__contact">
						<a href="mailto:hello@pavone.net">
							<img src="img/envelope.svg" alt="" />
						</a>
						<p><span>Philadelphia</span><span>Harrisburg</span><span>New York City</span><span>Atlanta</span></p>
					</div>
				</div>
			</section>
			<main>
				<section class="row bulldogged-is no-gutters" id="bulldogged-is">
					<div class="col-md-4 offset-md-8 bulldogged-is__bg"></div>
					<div class="col-12">
						<h1 class="marquee-container">
							<span class="marquee-container__marquee-type">Fiercly Independent.</span>
						</h1>
					</div>
					<div class="col-md-3 col-sm-8 offset-md-1 bulldogged-is__text animatedParent animateOnce">
						<div class="animated fadeInUp delay-500">
							<h4>Bulldogged is…</h4>
							<p>The tenacious pursuit of hard working ideas that work for our clients.</p>
							<a href="about.php" class="cta-label-icon">Learn more about us</a>
						</div>
					</div>
					<div class="col-md-6 offset-md-1 bulldogged-is__img animatedParent animateOnce">
						<div class="animated fadeInUp delay-500">
							<picture>
								<source media="(max-width: 550px)" srcset="img/bulldog-mobile.jpg">
								<source media="(max-width: 900px)" srcset="img/bulldog-tablet.jpg">
								<img src="img/bulldog-desktop.jpg" alt="" class="parallax">
							</picture>
						</div>
					</div>
				</section>
				<section class="work animatedParent animateOnce" id="work">
					<div class="col-md-2 offset-md-10 section-label-container animated fadeInDown delay-1000">
						<div class="section-label">
							<span class="label-1 section-label__text">See the work</span>
							<div class="section-label__line"></div>
						</div>
					</div>
					<h3 class="text-center animated fadeInUp delay-500">Let’s see it <br />in <span>action.</span></h3>
					<div class="case-studies animatedParent animateOnce">
						<div class="row animated fadeInUp delay-500">
							<div class="col-12 case-study full">
								<div class="row">
									<div class="col-lg-4 col-md-5">
										<div>
											<a href="mount-nittany.php" class="case-study__num">
												<p class="num-accent">01</p>
											</a>
											<div class="case-study__text">
												<a href="mount-nittany.php" class="case-study__text__client label-2">Mount Nittany Health</a>
												<h4 class="case-study__text__tagline">
													<a href="mount-nittany.php">Courageous <br />at Heart</a>
												</h4>
												<p class="case-study__text__snippet">While “care” is usually a crutch in healthcare marketing, this work transforms Mount Nittany’s compassion into its fiercest, most distinctive asset.</p>
												<a href="mount-nittany.php" class="cta-label-icon">View work</a>
											</div>
										</div>
									</div>
									<div class="col-md-7 offest-lg-1 case-study__img">
										<div class="case-study__img__container">
											<a href="mount-nittany.php">
												<picture>
													<source media="(max-width: 900px)" srcset="img/work/mtnit/mtnit-card-sm.png">
													<img src="img/work/mtnit/mtnit-card-lg.png" alt="">
												</picture>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 offset-md-1 case-study">
								<a href="casa.php" class="case-study-link">
									<div class="case-study__img">
										<img src="img/work/casa/casa-card-sm.png" alt="" />
									</div>
									<div class="case-study__text">
										<div>
											<div class="case-study__text__heading">
												<div class="case-study__num">
													<p class="num-accent">02</p>
												</div>
												<div class="case-study__text__client label-2">Court Appointed <br />Special Advocates</div>
											</div>
											<h3 class="case-study__text__tagline">One bag is <br />all they had</h3>
											<div class="cta-label-icon">View work</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-5 offset-md-1 case-study">
								<a href="pocono.php" class="case-study-link">
									<div class="case-study__img">
										<img src="img/work/pocono/pocono-card-sm.png" alt="" />
									</div>
									<div class="case-study__text">
										<div>
											<div class="case-study__text__heading">
												<div class="case-study__num">
													<p class="num-accent">03</p>
												</div>
												<div class="case-study__text__client label-2">Pocono <br />Raceway</div>
											</div>
											<h3 class="case-study__text__tagline">For the Love <br />of Racing</h3>
											<div class="cta-label-icon">View work</div>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="row yellow-bg">
							<div class="col-10 offset-md-1 text-center animated fadeInUp delay-500">
								<a href="work.php" class="cta-label">View All Work</a>
							</div>
						</div>
					</div>
				</section>
				<section class="press animatedParent animateOnce" id="press">
					<div class="col-md-2 offset-md-10 section-label-container animated fadeInDown delay-1000">
						<div class="section-label">
							<span class="label-1 section-label__text">Agency Press</span>
							<div class="section-label__line"></div>
						</div>
					</div>
					<div class="yellow-bg">
						<h3 class="text-center animated fadeInUp delay-500"><span>From</span> the <br />Newsroom</h3>
					</div>
					<div class="row featured-story animated fadeInUp delay-500">
						<div class="col-md-10 offset-md-1">
							<a href="https://pavonemg.com/news/new-documentary-film-spearheaded-by-pavone-storms-streaming-services" target="_blank">
								<div class="featured-story__img">
									<picture>
										<source media="(max-width: 900px)" srcset="img/featured-story-mobile.png">
										<img src="img/featured-story.png" alt="">
									</picture>
								</div>
								<div class="featured-story__text text-center">
									<span class="label-2 featured-story__text__subheading">Featured Story</span>
									<h3>New documentary film “storms” streaming services</h3>
									<div class="featured-story__text__author">
										<span class="label-2">Elise Brown</span>
									</div>
									<div class="btn-circle">
										<span>Read <br />Story</span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row top-stories animated fadeInUp delay-500">
						<div class="col-md-10 offset-md-1">
							<div class="row">
								<div class="col-md-4 top-stories__story">
									<span class="label-2 top-stories__story__subheading">Top Story</span>
									<a href="https://pavonemg.com/news/pmg-creates-lighthearted-posters-to-ease-the-stress-of-returning-to-the-office" target="_blank" class="top-stories__story__title">
										<h5>Pavone creates lighthearted posters to ease the stress of returning to the office</h5>
									</a>
									<div class="top-stories__story__snippet">
										<p>As the nation slowly figures out how we’ll be going back to the office, we created a fun way to ease ourselves into it…</p>
									</div>
									<a href="https://pavonemg.com/news/pmg-creates-lighthearted-posters-to-ease-the-stress-of-returning-to-the-office" target="_blank" class="cta-label-icon">Read</a>
								</div>
								<div class="col-md-4 top-stories__story">
									<span class="label-2 top-stories__story__subheading">Top Story</span>
									<a href="https://pavonemg.com/news/pmgs-resilience-in-adage-article" target="_blank" class="top-stories__story__title">
										<h5>Pavone CMO talks agency resiliency in Ad Age</h5>
									</a>
									<div class="top-stories__story__snippet">
										<p>Our company has faced its share of challenges in our 28 years…</p>
									</div>
									<a href="https://pavonemg.com/news/pmgs-resilience-in-adage-article" target="_blank" class="cta-label-icon">Read</a>
								</div>
								<div class="col-md-4 top-stories__story">
									<span class="label-2 top-stories__story__subheading">Top Story</span>
									<a href="https://pavonemg.com/news/our-new-normal" target="_blank" class="top-stories__story__title">
										<h5>Our new normal</h5>
									</a>
									<div class="top-stories__story__snippet">
										<p>As a brand-sustaining business, switching to a remote model (aka “WFH,” or “working from home”) is just business as usual for us. In our 28 years…</p>
									</div>
									<a href="https://pavonemg.com/news/our-new-normal" target="_blank" class="cta-label-icon">Read</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="capabilities animatedParent animateOnce" id="capabilities">
					<div class="col-md-2 offset-md-10 section-label-container animated fadeInDown delay-500">
						<div class="section-label">
							<span class="label-1 section-label__text">Capabilities</span>
							<div class="section-label__line"></div>
						</div>
					</div>
					<div class="row animated fadeInUp delay-500 capabilities-container">
						<div class="col-md-6">
							<h3 class="d-block d-md-none"><span>What can’t</span> we <br />do for you?</h3>
							<div class="capabilities__img">
								<picture>
									<source media="(max-width: 550px)" srcset="img/capabilities-mobile.png">
									<img src="img/capabilities-desktop.png" alt="" class="parallax">
								</picture>
							</div>
						</div>
						<div class="col-lg-4 col-md-5 offset-lg-1 capabilities__text">
							<div>
								<h3 class="d-none d-md-block"><span>What can’t</span> we <br />do for you?</h3>
								<p>Whatever your communication needs are, we’re built to build it.</p>
								<h4>Capabilities</h4>
								<div class="row">
									<div class="col-md-6">
										<ul>
											<li>Advertising</li>
											<li>Branding</li>
											<li>Digital</li>
											<li>Packaging Design</li>
											<li>Strategy</li>
											<li>Development</li>
											<li>Public Relations</li>
										</ul>
									</div>
									<div class="col-md-6">
										<ul>
											<li>Event Marketing</li>
											<li>Shopper Marketing</li>
											<li>Predictive Analytics</li>
											<li>Social Media</li>
											<li>Ecomm</li>
											<li>Media Strategy/Planning/Buying</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="culture animatedParent animateOnce" id="culture">
					<div class="col-md-2 offset-md-10 section-label-container animated fadeInDown delay-500">
						<div class="section-label">
							<span class="label-1 section-label__text">Culture</span>
							<div class="section-label__line"></div>
						</div>
					</div>
					<div class="afterhours animated fadeInUp delay-1000">
						<p class="num-accent">Afterhours</p>
					</div>
					<div class="row no-gutters social-feed animated fadeInUp delay-1000">
						<div class="col-md-3 col-6">
							<a href="https://www.instagram.com/paigedk07" target="_blank">
								<div class="social-feed__img">
									<img src="img/social-1.jpg" alt="" />
								</div>
								<div class="social-feed__overlay">
									<div>
										<div class="social-feed__overlay__icon">
											<img src="img/instagram-yellow.svg" alt="" />
										</div>
										<p class="social-feed__overlay__user">@paigedk07</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-6">
							<a href="https://www.instagram.com/uncletwisty" target="_blank">
								<div class="social-feed__img">
									<img src="img/social-2.jpg" alt="" />
								</div>
								<div class="social-feed__overlay">
									<div>
										<div class="social-feed__overlay__icon">
											<img src="img/instagram-yellow.svg" alt="" />
										</div>
										<p class="social-feed__overlay__user">@uncletwisty</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-6">
							<a href="https://www.instagram.com/kira_elizabeth97" target="_blank">
								<div class="social-feed__img">
									<img src="img/social-3.jpg" alt="" />
								</div>
								<div class="social-feed__overlay">
									<div>
										<div class="social-feed__overlay__icon">
											<img src="img/instagram-yellow.svg" alt="" />
										</div>
										<p class="social-feed__overlay__user">@kira_elizabeth97</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-6">
							<a href="https://www.instagram.com/dda.ca_jay" target="_blank">
								<div class="social-feed__img">
									<img src="img/social-4.jpg" alt="" />
								</div>
								<div class="social-feed__overlay">
									<div>
										<div class="social-feed__overlay__icon">
											<img src="img/instagram-yellow.svg" alt="" />
										</div>
										<p class="social-feed__overlay__user">@dda.ca_jay</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="row no-gutters social-posts animated fadeInUp delay-1000">
						<!--<div class="col-md-6 text-center">
							<a href="" target="_blank" class="social-posts__icon">
								<img src="img/linkedin-lg.svg" alt="" />
							</a>
							<h5 class="social-posts__post">Pavone Marketing Group is one of the Central Penn Business Journal's "50 Fastest..</h5>
							<p class="social-posts__user">
								<a href="https://www.linkedin.com/company/pavone" target="_blank">@pavone</a>
							</p>
						</div>
						<div class="col-md-6 text-center">
							<a href="https://twitter.com/pavone" target="_blank" class="social-posts__icon">
								<img src="img/twitter-lg.svg" alt="" />
							</a>
							<h5 class="social-posts__post">Pavone Marketing Group is one of the Central Penn Business Journal's "50 Fastest..</h5>
							<p class="social-posts__user">
								<a href="https://twitter.com/pavone" target="_blank">@pavone</a>
							</p>
						</div>-->
						<div id="curator-feed-default-feed-layout">
							<a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a>
						</div>
					</div>
				</section>
			</main>
			<?php include('includes/footer.php'); ?>
			<!--<div class="modal fade" id="homepage-modal" tabindex="-1" role="dialog" aria-labelledby="homepage-modal-label" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<img src="img/SpotBowl18Logo_Final818x409.jpg" alt="" />
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h5>The SpotBowl 18 polls are officially open, so cast your vote below, and feel free to vote more than once.</h5>
							<a href="https://spotbowl.com" class="btn-circle"><span>Check it out</span></a>
						</div>
					</div>
				</div>
			</div>-->
		</div>
        <?php include('includes/scripts.php'); ?>
		<script type="text/javascript">
			/* curator-feed-default-feed-layout */
			(function(){
			var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
			i.src = "https://cdn.curator.io/published/9a9e7aaf-84cb-4ea3-a3aa-6f0d5618372b.js";
			e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
			})();
		</script>
    </body>
</html>