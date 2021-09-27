<?php
/**
 * Template Name: item
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
						<h3 class="text-center font-weight-bold text-white cursor-pointer d-inline" onclick="history.back();"><i class="fas fa-chevron-circle-left h5"></i> Каталог</h3>
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
		<?php 
			$_pf = new WC_Product_Factory();
    		$product = $_pf->get_product($_GET['product_id']);
    		$image_id = $product->get_image_id();
			$image_url = wp_get_attachment_image_url( $image_id, 'full' );

			$gallery = $product->get_gallery_image_ids();
		?>
		<div class="container mw-100 p-5 inner-sh">
			<div class="row bg-white p-md-5 m-0">
				<div class="col-md-6 col-xs-12 text-center mt-3">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner" role="listbox">
					    <div class="carousel-item active">
					      <img class="w-100 p-2" src="<?php echo $image_url; ?>" alt="<?php echo $product->get_name(); ?>">
					    </div>
					    <?
					    	foreach ($gallery as $image) {
					    		echo '<div class="carousel-item">
						      			<img class="d-block w-100" src="'.wp_get_attachment_image_url($image, 'full').'" data-src="'.wp_get_attachment_image_url($image, 'full').'" alt="'.$product->get_name().'">
						   			  </div>';
					    	}
					    ?>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon background-dark-grey rounded" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon background-dark-grey rounded" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>

				<div class="col-md-6 col-xs-12 mt-3 w-100">
					<h3 class="color-dark-grey font-bold"><?php echo $product->get_name(); ?></h3>
					<h5 class="font-regular cat-link"><?php echo $product->get_categories(); ?></h5>
					<h5 class="color-primary font-bold my-4"><?php echo $product->get_price(); ?> UAH</h5>
					<a class="btn background-primary" href="../../<?php echo do_shortcode('[add_to_cart_url id="'.$_GET['product_id'].'"]'); ?>">Добавить в корзину</a>
					<h5 class="color-dark-grey font-weight-bold">Характеристики</h5>
					<pre class="color-dark-grey font-regular short-desc small"><?php echo $product->get_short_description(); ?></pre>
				</div>
				<div class="col-12 mt-5 w-100">
					<p class="color-dark-grey"><?php echo $product->get_description(); ?></p>
				</div>
			</div>
		</div>
<?php get_footer(); ?>