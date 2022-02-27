<!doctype html>
<html lang="en">
    <head>
        <title>Pavone - Healthcare</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
		<?php include('includes/styles.php'); ?>
    </head>
    <body class="health">
        <?php include('includes/browserupgrade.php'); ?>
        <div>
			<?php include('includes/header.php'); ?>
            <section class="hero jarallax animatedParent animateOnce" data-jarallax="" data-speed="0.2" style="background-image: url('img/healthcare-hero.jpeg">
                <div class="hero__text animated go">
                    <div class="row hero__text__line1">
                        <div class="col-md-10 offset-md-1">
                            <h1>Healthcare</h1>
                        </div>
                    </div>
                    <div class="row hero__text__line2">
                        <div class="col-md-4 col-sm-6 offset-md-1">
                            <div class="hero__text__line2__highlight">
                                <h3>Case Study</h3>
                            </div>
                        </div>
                        <div class="watch-it-circle col-md-3 offset-md-1">
                            <a href="#healthcare-video" class="btn-circle">
                                <span>Watch <br>it</span>
                            </a>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </section>
			<main>
				<section class="healthcare-video" id="healthcare-video">
					<div class="video">
						<div class="content">
							<iframe src="https://player.vimeo.com/video/528966482" allow="autoplay; fullscreen" allowfullscreen></iframe>
							<div class="video__poster">
								<picture class="video__poster__img">
									<source media="(max-width: 550px)" srcset="img/healthcare-video-poster-mobile.jpg">
									<source media="(max-width: 900px)" srcset="img/healthcare-video-poster.jpg.jpg">
									<img src="img/healthcare-video-poster.jpg" alt="">
								</picture>
								<div class="btn-circle play-btn">
									<span>Play</span>
								</div>
							</div>
						</div>
					</div>
				</section>
                <section class="executions animatedParent animateOnce">
                    <div class="row">
                        <div class="healthcare_block col-md-8 offset-md-2 text-center animated fadeInUp delay-500 go">
                            <h3 class="specialists-title">We're healthcare <span>specialists.</span></h3>
                            <p class="specialists-desc">With experience across multiple healthcare related disciplines, Pavone has a history of successfully guiding clients past the clutter found in most healthcare advertising by way of strategic research and planning.</p>
                            <p class="specialists-details">Our expertise spans from medical products/services to technology, and just about everything in between. We have the resources to execute your vision and bring big ideas to life in market, as well as a nimble approach which is perfectly suited for an industry which is ever changing. And with all core marketing capabilities under one roof, we're more efficient with your investment, making your dollars work harder, as if they are our own.</p>
                            <a href="work.php" class="cta-label-icon">See more work</a>
                        </div>
                    </div>
                </section>
            </main>
			<?php include('includes/footer.php'); ?>
		</div>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>