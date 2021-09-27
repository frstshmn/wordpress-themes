<?php
/**
 * Template Name: catalog
 *
 
 */

get_header(); ?>
	<body class="font-regular">
		<div class="loader">
			  <div class="loader_inner"></div>
		</div>
		<div class="background">
			<nav class="navbar py-0 py-md-3" id="nav">
				<div class="row text-center w-100 m-0">					
					<div class="col-4 text-left d-none d-md-block">
						<a href="http://discoverystore.com.ua"><img class="logoscreen w-50" src="<? echo get_stylesheet_directory_uri().'/' ?>styles/logo.svg" alt="Discovery Store"/></a>
					</div>
					<div class="col-4 m-auto pt-5 pt-md-0">
						<h3 class="text-center font-weight-bold text-white align-middle">Каталог</h3>
					</div>
					<div class="col-4 d-none d-md-block m-auto">
						<div class="row text-right my-auto">
							<span class="col-12"><a class="p-0 color-light-grey font-regular h6" href="tel:+380677515232">+38(067)751-52-32</a></span>
							<span class="col-12"><a class="p-0 color-light-grey font-regular h7" href="mailto:discoverystore@gmail.com">discoverystore@gmail.com</a></span>
						</div>
					</div>
				</div>
			</nav>

			<div class="row bg-transparent p-5  m-0">
				<div class="dropdown my-3 my-md-0 mx-auto" id="categories">
					<button class="btn bg-white color-grey dropdown-toggle border-0 sh-lg corner-pill font-bold py-3 px-4 h7" type="button" id="catdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-5">Категорія</span><i class="ml-5 fas fa-chevron-down"></i></button>
					<div class="dropdown-menu border-0 shadow w-100 mt-0 text-center" aria-labelledby="catdropdown">
						<?php
							$args = array(
								'taxonomy'   => "product_cat",
							    'number'     => $number,
							    'orderby'    => $orderby,
							    'order'      => $order,
							    'hide_empty' => $hide_empty,
							    'include'    => $ids
							);
							$product_categories = get_terms($args);
							echo '<p class="m-0 p-1 color-grey cat-link"><a href="/catalog">Всі</a></p>';
							foreach ($product_categories as $cat) {
								if($cat->name == 'Uncategorized'){
									continue;
								}
							 	echo '<p class="m-0 p-1 color-grey cat-link"><a href="'.create_uri_by_param($cat->slug, 'category').'">'.$cat->name.'</a></p>';
							 } ?>
					</div>
				</div>
				<?php
					function create_uri_by_param($add_uri, $uri_type){
						$uri = 'http://discoverystore.com.ua/catalog/?';

						if(!empty($_GET['category'])){

							if($_GET['category'] != $add_uri && $uri_type == 'category'){
								$uri .= 'category='.$add_uri.'&';
							} else {
								$uri .= 'category='.$_GET['category'].'&';
							}
						}
						if(!empty($_GET['priceorder'])){
							if($_GET['priceorder'] != $add_uri && $uri_type == 'priceorder'){
								$uri .= 'priceorder='.$add_uri.'&';
							} else {
								$uri .= 'priceorder='.$_GET['priceorder'].'&';
							}
						}

						if(empty($_GET[$uri_type])){
							$uri .= $uri_type.'='.$add_uri.'&';
						}
						return substr($uri, 0, -1);
					}
				?>
				<div class="bg-white" id="view">
					
				</div>
				<div class="dropdown my-3 my-md-0 mx-auto" id="priceorder">
					<button class="btn bg-white color-grey dropdown-toggle border-0 sh-lg corner-pill font-bold py-3 px-4 h7" type="button" id="catdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="mr-5">Сортувати</span><i class="ml-5 fas fa-chevron-down"></i></button>
					<div class="dropdown-menu border-0 shadow w-100 mt-0 text-center" aria-labelledby="catdropdown">
						<p class="m-0 p-1 color-grey cat-link"><a href="<?php echo(create_uri_by_param('asc', 'priceorder')); ?>">За зростанням ціни</a></p>
						<p class="m-0 p-1 color-grey cat-link"><a href="<?php echo(create_uri_by_param('desc', 'priceorder')); ?>">За спаданням ціни</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="container mw-100">
			<div class="row bg-white p-5 m-0 w-100">
					<?php  
					    $args = array(
					        'post_type' => 'product'
					    );

					    if(!empty($_GET['category'])){
					    	$args['product_cat'] = $_GET['category'];
						}
						
						if(!empty($_GET['priceorder'])){
							$args['orderby'] = 'meta_value_num';
							$args['order'] = $_GET['priceorder'];
							$args['meta_key'] = '_price';
					    }

					    $loop = new WP_Query($args);

						while ($loop->have_posts()) : $loop->the_post();
							if($product->get_price() == null){
								continue;
							}
					        global $product;
							$image_id = $product->get_image_id();
							$image_url = wp_get_attachment_image_url( $image_id, 'full' );
					        echo('<div class="col-md-4 col-xs-12 mb-4"><a href="/item?product_id='.$product->get_id().'">
					        		<div class="card cursor-pointer shadow border-0 corner-pill">
										<img class="card-img-top p-2 item-img" src="'.$image_url.'" alt="Card image cap">
										<div class="card-body">
											<div class="row">
												<div class="col-12">
													<h4 class="card-title font-bold h5 color-dark-grey">'.get_the_title().'</h4>
													<p class="card-text color-grey">'.$product->get_price().' UAH</p>
												</div>
											</div>
										</div>
									</div>
								</a></div>');
					    endwhile;

					    wp_reset_query();
					?>
			</div>
		</div>
<?php get_footer(); ?>