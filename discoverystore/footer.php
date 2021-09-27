<?php wp_footer() ?>
			<div class="row w-100 m-0 background-dark-grey p-5 text-center">
				<div class="col-12">
					<img class="logoscreen w-25" src="<? echo get_stylesheet_directory_uri().'/' ?>styles/logo.svg" alt="Discovery Store"/>
					<ul type="none" class="p-0 d-flex flex-row justify-content-center">
						<li class="mx-2"><a class="btn btn-light border-0 corner-pill py-2 px-3 sh-lg" href="<?php echo get_home_url(); ?>">Головна</a></li>
						<li class="mx-2"><a class="btn btn-light border-0 corner-pill py-2 px-3 sh-lg" href="/catalog">Каталог</a></li>
						<li class="mx-2"><a class="btn btn-light border-0 corner-pill py-2 px-3 sh-lg" href="/shipping">Доставка</a></li>
						<li class="mx-2"><a class="btn btn-light border-0 corner-pill py-2 px-3 sh-lg" href="/return">Повернення</a></li>
						<li class="mx-2"><a class="btn btn-light border-0 corner-pill py-2 px-3 sh-lg" href="/contacts">Контакти</a></li>
					</ul>
					<p class="text-white">Discovery Store &copy; 2021. Права захищені.</p>
				</div>
				<div class="col-12">
					<p class="text-white small">Developed by <a href="http://spacedesign.in.ua" rel="noopener noreferrer" target="_blank">frstshmn</a></p>
				</div>
		</div>
		<!-- Popper.JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<!-- Bootstrap JS -->
	 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<script src="<? echo get_stylesheet_directory_uri().'/' ?>js/paralax.js"></script>
		<script src="<? echo get_stylesheet_directory_uri().'/' ?>js/map.js"></script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3ggiVou8-ks4GU582IW8YTWk95ZZZPFA&callback=initMap" type="text/javascript"></script>
	</body>
</html>