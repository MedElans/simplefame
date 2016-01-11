<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
       <![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>Simple Fame</title>

</head>

<body class="stretched">

	<div id="wrapper" class="clearfix">

		<!-- Slider -->
		<?php include('sections/slider.html'); ?>

		<!-- Navigation -->
		<?php include('sections/navigation.html'); ?>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<!-- About -->
				<?php include('sections/about.html'); ?>

				<!-- Services -->
				<?php include('sections/services.html'); ?>

				<!-- Portfolio -->
				<?php include('sections/portfolio.html'); ?>

                <!-- Team -->
                <?php include('sections/team.html'); ?>

                <!-- Skills -->
                <?php include('sections/skills.html'); ?>

                <!-- Testimonials -->
                <?php include('sections/testimonials.html'); ?>
            </section>

            <div class="promo promo-light promo-full promo-uppercase">
                <div class="container clearfix">
                    <span>Nous nous efforçons de fournir à nos clients une expérience merveilleuse</span>
                    <h3>Convaincu ? Contactez-nous sur <a href="mailto:simplefame@hotmail.com"><span>simplefame@hotmail.com</span></a></h3>
                </div>
            </div>
            <footer id="footer" class="dark">

             <div id="copyrights">

                <div class="container clearfix">

                   <div class="col_half">
                    <p></p>
                </div>

                <div class="col_half col_last tright">


               <!--  <a href="#" class="social-icon si-small si-borderless si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>

                <a href="#" class="social-icon si-small si-borderless si-gplus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                </a>

                <a href="#" class="social-icon si-small si-borderless si-pinterest">
                    <i class="icon-pinterest"></i>
                    <i class="icon-pinterest"></i>
                </a>

                <a href="#" class="social-icon si-small si-borderless si-github">
                    <i class="icon-github"></i>
                    <i class="icon-github"></i>
                </a>

                <a href="#" class="social-icon si-small si-borderless si-linkedin">
                    <i class="icon-linkedin"></i>
                    <i class="icon-linkedin"></i>
                </a> -->




                <a href="mailto:simplefame@hotmail.com"> simplefame@hotmail.com</a>

                <div class="clear"></div>
            </div>

        </div>

    </div>
</footer>

</div>

<div id="gotoTop" class="icon-angle-up"></div>

<script type="text/javascript" src="js/functions.js"></script>

<script>
    jQuery(document).ready(function($){

        	// Slider
            var swiperSlider = new Swiper('.swiper-parent',{
                paginationClickable: false,
                slidesPerView: 1,
                grabCursor: true,
                onSwiperCreated: function(swiper){
                    $('[data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var toAnimateDelay = $(this).attr('data-caption-delay');
                        var toAnimateDelayTime = 0;
                        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                        if( !$toAnimateElement.hasClass('animated') ) {
                            $toAnimateElement.addClass('not-animated');
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            setTimeout(function() {
                                $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                            }, toAnimateDelayTime);
                        }
                    });
                },
                onSlideChangeStart: function(swiper){
                    $('#slide-number-current').html(swiper.activeIndex + 1);
                    $('[data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                        $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                    });
                },
                onSlideChangeEnd: function(swiper){
                    $('#slider .swiper-slide').each(function(){
                        if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                    });
                    $('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
                        if($(this).find('video').length > 0) {
                            if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                        }
                    });
                    if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

                    $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var toAnimateDelay = $(this).attr('data-caption-delay');
                        var toAnimateDelayTime = 0;
                        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                        if( !$toAnimateElement.hasClass('animated') ) {
                            $toAnimateElement.addClass('not-animated');
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            setTimeout(function() {
                                $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                            }, toAnimateDelayTime);
                        }
                    });
                }
            });

$('#slider-arrow-left').on('click', function(e){
 e.preventDefault();
 swiperSlider.swipePrev();
});

$('#slider-arrow-right').on('click', function(e){
 e.preventDefault();
 swiperSlider.swipeNext();
});

$('#slide-number-current').html(swiperSlider.activeIndex + 1);
$('#slide-number-total').html(swiperSlider.slides.length);
});
</script>
</body>
</html>