<!doctype html>
<html lang="en">
    <head>
        <title>Pavone - Work - Kompete</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
		<?php include('includes/styles.php'); ?>
    </head>
    <body class="work-details">
        <?php include('includes/browserupgrade.php'); ?>
        <div>
			<?php include('includes/header.php'); ?>
			<section class="hero animatedParent animateOnce">
				<div class="hero__img">
					<picture>
						<source media="(max-width: 550px)" srcset="img/work/kompete/kompete-hero-mobile.png">
						<source media="(max-width: 900px)" srcset="img/work/kompete/kompete-hero-tablet.png">
						<img src="img/work/kompete/kompete-hero-desktop.png" alt="" class="work-parallax">
					</picture>
				</div>
				<div class="hero__text">
					<div class="row hero__text__line1">
						<div class="col-md-1 col-sm-2 hero__text__line1__back animated fadeIn">
							<a href="work.php">
								<img src="img/back.svg" alt="" />
							</a>
						</div>
						<div class="col-md-10 col-sm-9 animated fadeIn">
							<h1>Kompete</h1>
						</div>
					</div>
				</div>
				<div class="case-study-overview animatedParent animateOnce">
					<div class="col-md-2 offset-md-10 section-label-container animated fadeInDown delay-1000">
						<div class="section-label">
							<span class="label-1 section-label__text">Case Study</span>
							<div class="section-label__line"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-11 offset-md-1 overview animated fadeInUp delay-500">
							<div class="row">
								<div class="col-md-4 offset-md-1 overview__intro animated fadeInUpShort delay-1500">
									<span class="overview__intro__abbrev label-2">Kompete</span>
									<h3 class="overview__intro__title">Glory to <br />the Grind</h3>
									<div class="overview__intro__desc">
										<p>Mark write some new stuff here.</p>
									</div>
									<a href="#overview-video" class="overview__intro__watch">See the Work below</a>
								</div>
								<div class="col-md-3 offset-md-1 overview__capabilities animated fadeInUpShort delay-1500">
									<span class="overview__capabilities__used label-2">Capabilities Used</span>
									<ul class="overview__capabilities__list">
										<li>Advertising</li>
										<li>Digital</li>
										<li>Strategy</li>
										<li>Development</li>
										<li>Public Relations</li>
										<li>Predictive Analytics</li>
										<li>Social Media</li>
										<li>Media Strategy/Planning/Buying</li>
									</ul>
								</div>
								<div class="col-md-11 offset-md-1 overview__video animated fadeInUpShort delay-1500" id="overview-video">
									<picture class="overview__img">
										<source media="(max-width: 550px)" srcset="img/work/kompete/kompete-overview-mobile.png">
										<source media="(max-width: 900px)" srcset="img/work/kompete/kompete-overview-tablet.png">
										<img src="img/work/kompete/kompete-overview-desktop.png" alt="">
									</picture>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<main>
				<section class="executions animatedParent animateOnce">
					<div class="col-md-2 offset-md-10 section-label-container animated fadeInDown delay-1000">
						<div class="section-label">
							<span class="label-1 section-label__text">Creative</span>
							<div class="section-label__line"></div>
						</div>
					</div>
					<div class="animated fadeInUp delay-500">
						<div class="row">
							<div class="col-md-10 offset-md-1">
								<h3 class="text-center">Additional <br class="d-block d-sm-none" /><span>executions</span></h3>
							</div>
						</div>
						<div class="executions__feature-img">
							<picture>
								<source media="(max-width: 550px)" srcset="img/work/kompete/kompete-feature-1-mobile.png">
								<source media="(max-width: 900px)" srcset="img/work/kompete/kompete-feature-1-tablet.png">
								<img src="img/work/kompete/kompete-feature-1-desktop.png" alt="" class="parallax">
							</picture>
						</div>
						<div class="row executions__slider">
							<div class="col-md-11">
								<div class="executions__slider__container">
									<div class="slide">
										<picture>
											<source media="(max-width: 550px)" srcset="img/work/kompete/kompete-slide-1-mobile.png">
											<source media="(max-width: 900px)" srcset="img/work/kompete/kompete-slide-1-tablet.png">
											<img src="img/work/kompete/kompete-slide-1-desktop.png" alt="">
										</picture>
									</div>
									<div class="slide">
										<picture>
											<source media="(max-width: 550px)" srcset="img/work/kompete/kompete-slide-2-mobile.png">
											<source media="(max-width: 900px)" srcset="img/work/kompete/kompete-slide-2-tablet.png">
											<img src="img/work/kompete/kompete-slide-2-desktop.png" alt="">
										</picture>
									</div>
									<div class="slide">
										<picture>
											<source media="(max-width: 550px)" srcset="img/work/kompete/kompete-slide-3-mobile.png">
											<source media="(max-width: 900px)" srcset="img/work/kompete/kompete-slide-3-tablet.png">
											<img src="img/work/kompete/kompete-slide-3-desktop.png" alt="">
										</picture>
									</div>
								</div>
							</div>
						</div>
						<div class="executions__feature-img">
							<picture>
								<source media="(max-width: 550px)" srcset="img/work/kompete/kompete-feature-2-mobile.png">
								<source media="(max-width: 900px)" srcset="img/work/kompete/kompete-feature-2-tablet.png">
								<img src="img/work/kompete/kompete-feature-2-desktop.png" alt="" class="parallax">
							</picture>
						</div>
						<div class="row">
							<div class="col-md-10 offset-md-1 text-center">
								<a href="work.php" class="cta-label">View all work</a>
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