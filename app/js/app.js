$(document).ready(function() {

    // back to top smooth scrolling
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 900, 'swing', function() {});
    });
	
	// set homepage title reel height
	/*function reelHeight(width) {
		var heroH1Height = $('.hero .pushing div').height();
        $('.hero .title-reel').height(heroH1Height);
    }
    reelHeight( $(window).width() );
    $(window).on('resize', function() {
        reelHeight( $(this).width() );
	});*/

	// set nav div to display: block after 1s
	setTimeout(function() {
		$('.nav-open').css('pointer-events', 'initial');
		$('.nav').css('display', 'block');
	}, 1000);

	// open and close the navigation
	$('button.nav-open').on('click', function() {
		$('body').addClass('nav-open').css('overflow-y', 'hidden');
	});
	$('button.nav-close').on('click', function() {
		$('body').removeClass('nav-open').css('overflow-y', 'auto');
	});

	// reload the page if a nav link with a hash is clicked and it exists on the current page
	$('.nav__nav-links .col-md-5:nth-child(1) a').on('click', function() {
		if ($('body').hasClass('about')) {
			location.reload();
		}
	});
	$('.nav__nav-links .col-md-5:nth-child(2) a').on('click', function() {
		if ($('body').hasClass('about')) {
			location.reload();
		}
	});
	$('.nav__nav-links .col-md-5:nth-child(3) a').on('click', function() {
		if ($('body').hasClass('home')) {
			location.reload();
		}
	});
	$('.nav__nav-links .col-md-5:nth-child(4) a').on('click', function() {
		if ($('body').hasClass('home')) {
			location.reload();
		}
	});
	$('.nav__nav-links .col-md-5:nth-child(5) a').on('click', function() {
		if ($('body').hasClass('home')) {
			location.reload();
		}
	});

	// img and picture tag parallax
	var images = document.getElementsByClassName('parallax');
	new simpleParallax(images, {
		overflow: true,
		scale: 1.3
	});

	// img and picture tag parallax
	var workImages = document.getElementsByClassName('work-parallax');
	new simpleParallax(workImages, {
		overflow: true,
		scale: 1.5
	});

	// set the bulldog image size
    function bulldogImgSize(width) {
        if (width <= 885) {
			var bulldogged = $('.bulldogged-is').height();
			var bulldoggedText = $('.bulldogged-is__text').height();
			var bulldoggedBg = (bulldogged - 50) - bulldoggedText;
			$('.bulldogged-is__bg').height(bulldoggedBg);

			var whyBulldog = $('.why-bulldog .no-gutters').height();
			var whyBulldogText = $('.why-bulldog__text').height();
			var whyBulldogBg = (whyBulldog - 100) - whyBulldogText;
			$('.why-bulldog__bg').height(whyBulldogBg);
        } else {
			$('.bulldogged-is__bg').height('100%');
			$('.why-bulldog__bg').height('100%');
        }
    }
    bulldogImgSize( $(window).width() );
    $(window).on('resize', function() {
        bulldogImgSize( $(this).width() );
	});

	// work page dropdown menu positioning
	function dropdownPosition(width) {
        if (width <= 1085) {
			$('.dropdown-menu').addClass('dropdown-menu-right');
        } else {
			$('.dropdown-menu').removeClass('dropdown-menu-right');
        }
    }
    dropdownPosition( $(window).width() );
    $(window).on('resize', function() {
        dropdownPosition( $(this).width() );
	});

	// case study slider
	setTimeout(function(){
		$('.executions__slider__container').slick({
			infinite: true,
			dots: true,
			arrows: true,
			prevArrow:"<img class='a-left control-c prev slick-prev' src='/wp-content/themes/pavone/img/arrow-previous.svg'>",
			nextArrow:"<img class='a-right control-c next slick-next' src='/wp-content/themes/pavone/img/arrow-next.svg'>"
		});
	}, 3000);
	
	// about video
    if ($('#about-video iframe').length) {

        var about_iframe = document.querySelector('#about-video iframe');
        var about_player = new Vimeo.Player(about_iframe);

        // hide the video poster on click and play the video
        $('#about-video .video__poster').on('click', function() {
            $(this).fadeOut();
            $('#about-video').css('z-index', '4');
            about_player.play();
        });

        // show the video poster when the video ends
        about_player.on('ended', function() {
            $('#about-video').css('z-index', '1');
            $('#about-video .video__poster').fadeIn();
        });
	}

	// healthcare video
	if ($('#healthcare-video iframe').length) {

        var healthcare_iframe = document.querySelector('#healthcare-video iframe');
        var healthcare_player = new Vimeo.Player(healthcare_iframe);

        // hide the video poster on click and play the video
        $('#healthcare-video .video__poster').on('click', function() {
            $(this).fadeOut();
            $('#healthcare-video').css('z-index', '4');
            healthcare_player.play();
        });
		
        // show the video poster when the video ends
        healthcare_player.on('ended', function() {
            $('#healthcare-video').css('z-index', '1');
            $('#healthcare-video .video__poster').fadeIn();
        });
	}

	// work video
    if ($('#work-video iframe').length) {

        var work_iframe = document.querySelector('#work-video iframe');
        var work_player = new Vimeo.Player(work_iframe);

        // hide the video poster on click and play the video
        $('#work-video .video__poster').on('click', function() {
            $(this).fadeOut();
            $('#work-video').css('z-index', '4');
            work_player.play();
        });

        // show the video poster when the video ends
        work_player.on('ended', function() {
            $('#work-video').css('z-index', '1');
            $('#work-video .video__poster').fadeIn();
        });
	}

	// overview video
    if ($('#overview-video-video iframe').length) {

        var overview_iframe = document.querySelector('#overview-video-video iframe');
        var overview_player = new Vimeo.Player(overview_iframe);

        // hide the video poster on click and play the video
        $('#overview-video-video .video__poster').on('click', function() {
            $(this).fadeOut();
            $('#overview-video-video').css('z-index', '4');
            overview_player.play();
        });

        // show the video poster when the video ends
        overview_player.on('ended', function() {
            $('#overview-video-video').css('z-index', '1');
            $('#overview-video-video .video__poster').fadeIn();
        });
	}

	// executions video 1
    if ($('#executions-video-1 iframe').length) {

        var exec_1_iframe = document.querySelector('#executions-video-1 iframe');
        var exec_1_player = new Vimeo.Player(exec_1_iframe);

        // hide the video poster on click and play the video
        $('#executions-video-1 .video__poster').on('click', function() {
            $(this).fadeOut();
            $('#executions-video-1').css('z-index', '4');
            exec_1_player.play();
        });

        // show the video poster when the video ends
        exec_1_player.on('ended', function() {
            $('#executions-video-1').css('z-index', '1');
            $('#executions-video-1 .video__poster').fadeIn();
        });
	}

	// executions video 2
    if ($('#executions-video-2 iframe').length) {

		var exec_2_iframe = document.querySelector('#executions-video-2 iframe');
		var exec_2_player = new Vimeo.Player(exec_2_iframe);
	
		// hide the video poster on click and play the video
		$('#executions-video-2 .video__poster').on('click', function() {
			$(this).fadeOut();
			$('#executions-video-2').css('z-index', '4');
			exec_2_player.play();
		});
	
		// show the video poster when the video ends
		exec_2_player.on('ended', function() {
			$('#executions-video-2').css('z-index', '1');
			$('#executions-video-2 .video__poster').fadeIn();
		});
	}

	// executions video 3
	if ($('#executions-video-3 iframe').length) {

		var exec_3_iframe = document.querySelector('#executions-video-3 iframe');
		var exec_3_player = new Vimeo.Player(exec_3_iframe);
	
		// hide the video poster on click and play the video
		$('#executions-video-3 .video__poster').on('click', function() {
			$(this).fadeOut();
			$('#executions-video-3').css('z-index', '4');
			exec_3_player.play();
		});
	
		// show the video poster when the video ends
		exec_3_player.on('ended', function() {
			$('#executions-video-3').css('z-index', '1');
			$('#executions-video-3 .video__poster').fadeIn();
		});
	}

	// executions video 4
	if ($('#executions-video-4 iframe').length) {

		var exec_4_iframe = document.querySelector('#executions-video-4 iframe');
		var exec_4_player = new Vimeo.Player(exec_4_iframe);

		// hide the video poster on click and play the video
		$('#executions-video-4 .video__poster').on('click', function() {
			$(this).fadeOut();
			$('#executions-video-4').css('z-index', '4');
			exec_4_player.play();
		});

		// show the video poster when the video ends
		exec_4_player.on('ended', function() {
			$('#executions-video-4').css('z-index', '1');
			$('#executions-video-4 .video__poster').fadeIn();
		});
	}

	// executions video 5
	if ($('#executions-video-5 iframe').length) {

		var exec_5_iframe = document.querySelector('#executions-video-5 iframe');
		var exec_5_player = new Vimeo.Player(exec_5_iframe);

		// hide the video poster on click and play the video
		$('#executions-video-5 .video__poster').on('click', function() {
			$(this).fadeOut();
			$('#executions-video-5').css('z-index', '4');
			exec_5_player.play();
		});

		// show the video poster when the video ends
		exec_5_player.on('ended', function() {
			$('#executions-video-5').css('z-index', '1');
			$('#executions-video-5 .video__poster').fadeIn();
		});
	}

	// slider video 1
	if ($('#slider-video-1 iframe').length) {

		var slider_1_iframe = document.querySelector('#slider-video-1 iframe');
		var slider_1_player = new Vimeo.Player(slider_1_iframe);

		// hide the video poster on click and play the video
		$('#slider-video-1 .video__poster').on('click', function() {
			$(this).fadeOut();
			$('#slider-video-1').css('z-index', '4');
			slider_1_player.play();
		});

		// show the video poster when the video ends
		slider_1_player.on('ended', function() {
			$('#slider-video-1').css('z-index', '1');
			$('#slider-video-1 .video__poster').fadeIn();
		});
	}

	// slider video 2
	if ($('#slider-video-2 iframe').length) {

		var slider_2_iframe = document.querySelector('#slider-video-2 iframe');
		var slider_2_player = new Vimeo.Player(slider_2_iframe);

		// hide the video poster on click and play the video
		$('#slider-video-2 .video__poster').on('click', function() {
			$(this).fadeOut();
			$('#slider-video-2').css('z-index', '4');
			slider_2_player.play();
		});

		// show the video poster when the video ends
		slider_2_player.on('ended', function() {
			$('#slider-video-2').css('z-index', '1');
			$('#slider-video-2 .video__poster').fadeIn();
		});
	}

	// show the homepage pop-up modal
	$('#homepage-modal').modal('show');
	
});