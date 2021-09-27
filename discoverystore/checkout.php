<?php
/**
 * Template Name: checkout
 *
 
 */

get_header(); ?>
	<body class="font-regular">
		<div class="loader">
			  <div class="loader_inner"></div>
		</div>
		<div class="background">
			<nav class="navbar py-3" id="nav">
				<div class="row text-center w-100 m-0">					
					<div class="col-4 text-left d-none d-md-block">
						<a href="http://discoverystore.com.ua"><img class="logoscreen w-50" src="<? echo get_stylesheet_directory_uri().'/' ?>styles/logo.svg" alt="Discovery Store"/></a>
					</div>
					<div class="col-4 m-auto">
						<h3 class="text-center font-weight-bold text-white align-middle"><?php wp_title(''); ?></h3>
					</div>
					<div class="col-4 d-none d-md-block m-auto">
						<div class="row text-right my-auto">
							<span class="col-12"><a class="p-0 color-light-grey font-regular h6" href="tel:+380677515232">+38(067)751-52-32</a></span>
							<span class="col-12"><a class="p-0 color-light-grey font-regular h7" href="mailto:discoverystore@gmail.com">discoverystore@gmail.com</a></span>
						</div>
					</div>
				</div>
			</nav>
		</div>

		<div class="container mw-100">
			<div class="row bg-white p-5 m-0 w-100">
            <?php echo do_shortcode("[woocommerce_checkout]"); ?>
			</div>
		</div>
<?php get_footer(); ?>