<?php

get_header(); ?>

<body class="font-regular">
	<!-- <div class="loader">
			  <div class="loader_inner"></div>
		</div> -->
	<div class="background-hero" data-type="paralax" data-speed="-2">
		<nav class="navbar py-3" id="nav">
			<div class="row text-center w-100 m-0">
				<div class="col-md-4 col-xs-12">
					<img class="logoscreen w-50" src="<? echo get_stylesheet_directory_uri().'/' ?>styles/logo-wide.svg" alt="Y.R. International Employment Agency" />
				</div>

				<div class="col-8 text-center d-none d-md-block my-auto">
					<a class="nav-link font-regular d-inline small" href="#about">Про нас</a>
					<a class="nav-link font-regular d-inline small" href="#vacancies">Вакансії</a>
					<a class="nav-link font-regular d-inline small" href="#contacts">Контакти</a>
					<a class="nav-link font-regular d-inline small p-2 mx-5 btn-animate" href="#contacts"><span>Консультація</span></a>
				</div>

			</div>
		</nav>

		<div class="px-5 jumbotron bg bg-transparent text-white text-md-left text-center rounded-0 m-0">
			<div class="row p-md-5">
				<div class="col-md-5 col-xs-12 px-5 text-center text-md-right">
					<img width="40%" src=<?php echo ('"' . get_theme_root_uri() . '/yriea/styles/logo.svg"'); ?>>
				</div>
				<div class="col-md-7 col-xs-12 px-md-5 m-0 p-0">
					<h1 class="font-extra-bold py-4 d-md-none h2 text-center">Офіційне<br><span class="color-primary">працевлаштування</span><br>за кордоном</h1>
					<h2 class="font-extra-bold pb-4 d-none d-md-block h1 text-left"><span class="display-4 font-extra-bold">Офіційне</span> <span class="color-primary">працевлаштування</span><br> за кордоном</h2>
					<div class="pb-5 small font-bold text-md-left text-center"><i class="fas fa-circle color-primary small mx-2"></i>Надійно<i class="fas fa-circle color-primary small mx-2"></i>Швидко<i class="fas fa-circle color-primary small mx-2"></i>Безпечно<i class="fas fa-circle color-primary small mx-2"></i></div>
				</div>
			</div>
		</div>

		<div class="row w-100 m-0">
			<div class="col-md-6 offset-md-3 col-xs-10 offset-xs-1">
				<div class="corner-block action-block shadow bg-white">
					<div class="row">
						<div class="col-xs-12 col-md-6 px-3 text-center p-md-5 py-5">
							<h5 class="font-extra-bold color-primary">Знайти роботу</h5>
							<p class="color-grey small py-2 px-md-0 px-5">Знайдіть роботу, яка вам до душі у існуючому списку</p>
							<a href="#" class="btn shadow corner-pill color-dark-grey"><i class="fas fa-briefcase"></i></a>
						</div>
						<div class="col-xs-12 col-md-6 px-3 text-center p-md-5 pb-5">
							<h5 class="text-center font-extra-bold color-primary">Залишити резюме</h5>
							<p class="color-grey small py-2 px-md-0 px-5">Відправте резюме нам і ми підберемо вам роботу</p>
							<a href="#" class="btn shadow corner-pill color-dark-grey"><i class="fas fa-file-alt"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="container mw-100 p-0 m-0 pt-5">

		<!--Що ми робимо -->

		<div class="row bg-white my-5 mx-0 w-100 p-md-5 font-regular" id="about">
			<div class="col-12 p-md-5 p-0"></div>
			<div class="col-md-6 col-xs-12 px-5">
				<h5 class="font-bold color-dark-grey py-5 pl-md-5">Що ми робимо</h5>
				<p class="color-grey pl-md-5 small text-justify">Всі ми знаємо як у нинішній час важливо мати роботу, тому нашим завданням є надати можливість офіційно працевлаштовуватися за кордоном не тільки українцям, а й іноземцям. Наше агентство чудово знає наскільки важлива підтримка для тих, хто знаходиться за кордоном, тому звертаючись до нас, ви можете бути впевнені в тому, що вам допоможуть з розв'язанням будь-якого питання.</p>
			</div>
			<div class="col-md-6 pr-md-5 position-relative">
				<div class="position-absolute shape shape-3 color-4 text-center h-100 w-100"></div>
				<div class="row pr-md-5">
					<div class="col-6 my-3">
						<div class="card text-center bg-white corner-block shadow border-0">
							<i class="far pt-5 fa-handshake display-4"></i>
							<div class="card-body">
								<h5 class="font-regular h6">Заключаємо<br>договори</h5>
							</div>
						</div>
					</div>
					<div class="col-6 my-3">
						<div class="card text-center bg-white corner-block shadow border-0">
							<i class="fas pt-5 fa-user-shield display-4"></i>
							<div class="card-body">
								<h5 class="font-regular h6">Забезпечуємо<br>страхування</h5>
							</div>
						</div>
					</div>
					<div class="col-6 my-3">
						<div class="card text-center bg-white corner-block shadow border-0">
							<i class="fas pt-5 fa-file-signature display-4"></i>
							<div class="card-body">
								<h5 class="font-regular h6">Оформлюємо<br>допуски</h5>
							</div>
						</div>
					</div>
					<div class="col-6 my-3">
						<div class="card text-center bg-white corner-block shadow border-0">
							<i class="fas pt-5 fa-headset display-4"></i>
							<div class="card-body">
								<h5 class="font-regular h6">Підтримуємо<br>зв'язок</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Країни -->

		<div class="row bg-white my-5 mx-0 w-100 p-md-5 font-regular">
			<div class="col-12 p-md-5 p-0"></div>
			<div class="col-md-6 col-xs-12 px-5 order-md-2">
				<h5 class="font-bold color-dark-grey py-5 pr-md-5">Країни, з якими співпрацюємо</h5>
				<p class="color-grey pr-md-5 small text-justify">Всі ми знаємо як у нинішній час важливо мати роботу, тому нашим завданням є надати можливість офіційно працевлаштовуватися за кордоном не тільки українцям, а й іноземцям. Наше агентство чудово знає наскільки важлива підтримка для тих, хто знаходиться за кордоном, тому звертаючись до нас, ви можете бути впевнені в тому, що вам допоможуть з розв'язанням будь-якого питання.</p>
			</div>
			<div class="col-md-6 col-xs-12 pl-md-5 order-md-1">
				<div class="position-absolute shape shape-2 color-4 text-center h-100 w-100"></div>
				<div class="row pl-md-5">
					<div class="col-6 my-3">
						<div class="card text-center bg-white corner-block shadow border-0">
							<img src="<? echo get_stylesheet_directory_uri().'/' ?>styles/poland.webp" class="corner-block w-100">
						</div>
					</div>
					<div class="col-6 my-3">
						<div class="card text-center bg-white corner-block shadow border-0">
							<img src="<? echo get_stylesheet_directory_uri().'/' ?>styles/germany.webp" class="corner-block w-100">
						</div>
					</div>
					<div class="offset-3 col-6 my-3">
						<div class="card text-center bg-white corner-block shadow border-0">
							<img src="<? echo get_stylesheet_directory_uri().'/' ?>styles/czech.webp" class="corner-block w-100">
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<!--Команда -->

		<div class="row bg-white my-5 mx-0 w-100 p-md-5 font-regular">
			<div class="col-12 p-md-5 p-0"></div>
			<div class="col-md-6 col-xs-12 px-5">
				<h5 class="font-bold color-dark-grey py-5 px-md-5">Наша команда</h5>
				<p class="color-grey pl-md-5 small text-justify">Всі ми знаємо як у нинішній час важливо мати роботу, тому нашим завданням є надати можливість офіційно працевлаштовуватися за кордоном не тільки українцям, а й іноземцям. Наше агентство чудово знає наскільки важлива підтримка для тих, хто знаходиться за кордоном, тому звертаючись до нас, ви можете бути впевнені в тому, що вам допоможуть з розв'язанням будь-якого питання.</p>
			</div>
			<div class="col-md-6 pt-5 pt-md-0 position-relative">
				<div class="position-absolute shape shape-1 color-4 text-center h-100 w-100"></div>
				<div class="row">
					<div class="col-12 my-3 text-center">
						<div class="display-2 d-inline"><i class="fas fa-user-secret color-dark-grey-70"></i></div>
						<div class="display-2 d-inline"><i class="fas fa-user-tie scale color-dark-grey text-shadow"></i></div>
						<div class="display-2 d-inline"><i class="fas fa-user-graduate color-dark-grey-70"></i></div>
					</div>
				</div>
			</div>
			<div class="col-12 p-5"></div>
		</div>

		<!--Вакансії -->

		<div class="row w-100 my-5 mx-0 p-md-5 font-regular inner-sh background-primary" id="vacancies">
			<div class="col-12 p-md-5 p-0"></div>
			<div class="col-md-6 col-xs-12 order-md-2 align-items-center">
				<h5 class="text-center font-bold text-white p-5 text-shadow align-items-center">Вакансії</h5>
				<p class="color-light-grey px-md-5 small text-justify align-items-center">Всі ми знаємо як у нинішній час важливо мати роботу, тому нашим завданням є надати можливість офіційно працевлаштовуватися за кордоном не тільки українцям, а й іноземцям. Наше агентство чудово знає наскільки важлива підтримка для тих, хто знаходиться за кордоном, тому звертаючись до нас, ви можете бути впевнені в тому, що вам допоможуть з розв'язанням будь-якого питання.</p>
			</div>
			<div class="col-md-6 col-xs-12 pl-md-5">
			<div class="inner-sh background p-5 corner-block order-md-1" data-type="paralax" data-speed="-3">

				<?php
					    $vacancies = get_posts();

					    foreach ($vacancies as $vacancy) {
							foreach (get_the_category() as $c) {
								$category .= $c->name;
								$category .= ', ';
							}
							$category = rtrim($category, ", ");

							setup_postdata($vacancy);
					        echo('<div class="card corner-block my-3 card-modal" data-toggle="modal" data-target="#work_modal'.get_the_ID().'">
									<div class="card-body">
										<p class="font-bold h6 d-inline">'.get_the_title().'</p>
										<p class="small d-inline">'.$category.'</p>
									</div>
								</div>
								<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="work_modal'.get_the_ID().'">
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content corner-block border-0">
											<div class="row p-5">
												<div class="col-md-6">
													<p class="font-bold h6">'.get_the_title().'</p>
													<p class="small color-grey">'.$category.'</p>
													<hr class="px-5">
													<small class="small">'.get_the_content().'</small>
												</div>
												<div class="col-md-6">
													<div class="contact-form w-100 align-middle">'.
													do_shortcode('[contact-form-7 id="9" title="Відгук на вакансію"]')
													.'</div>
												</div>
											</div>
										</div>
									</div>
								</div>');
								// [file* file-776 limit:2000000 filetypes:pdf|doc|docx class:custom-file-input]
						}
						
					    wp_reset_query();
					?>
			</div>
			</div>
			<div class="col-md-12 col-xs-12 p-5 order-3"></div>
		</div>

		<div class="row bg-white my-5 mx-0 w-100 p-5 font-regular">
			
			<div class="col-12 col-12 px-5 text-center">
				<h5 class="font-bold color-dark-grey pt-5">Турбують питання?</h5>
				<p class="color-grey small pb-5">Залиш своє повідомлення нам</p>
			</div>
			<div class="offset-md-4 col-md-4 col-xs-12">
				<?php
					echo(do_shortcode('[contact-form-7 id="11" title="Консультація"]'));
				?>
			</div>
		</div>

		<div class="row background-hero inner-sh w-100 m-0" id="contacts">
			<div class="col-12">
				<div class="row px-md-5 px-3 py-5">
					<div class="offset-md-1 col-md-5 col-xs-12 text-white">
						<div class="p-5">
							<h4 class="text-center font-extra-bold text-white">Контакти</h4>
						</div>
						<div class="row">
							<div class="col-xs-6 col-md-12 col-sm-6 py-3">
								<div class="row">
									<div class="col-md-6 col-xs-12 text-md-right text-center mb-md-0 mb-2">
										<h4 class="mb-1">Юлій</h4>
										<h6 class="mb-1 small">Директор</h6>
									</div>
									<div class="col-md-6 col-xs-12 text-md-left text-center">
										<a href="tel:+380957385157">+380973596016</a><br>
										<a href="viber://add?number=%2B380932015668">+380932015668</a><br>
										<small><a href="mailto:tomex@ukr.net"><b><i>tomex@ukr.net</i></b></a><br></small>
									</div>
								</div>
							</div>

							<div class="col-xs-6 col-md-12 col-sm-6 py-3">
								<div class="row">
									<div class="col-md-6 col-xs-12 text-md-right text-center mb-md-0 mb-2">
										<h4 class="mb-1">Роман</h4>
										<h6 class="mb-1 small">Директор</h6>
									</div>
									<div class="col-md-6 col-xs-12 text-md-left text-center">
										<a href="tel:+380505580529">+380505580529</a><br>
										<a href="tel:+48690202840">+48690202840 </a><br>
										<small><a href="mailto:r.smal@my.com"><b><i>r.smal@my.com</i></b></a><br></small>
									</div>
								</div>
							</div>

							<div class="col-xs-6 col-md-12 col-sm-6 py-3">
								<div class="row">
									<div class="col-md-6 col-xs-12 text-md-right text-center mb-md-0 mb-2">
										<h4 class="mb-1">Вікторія</h4>
										<h6 class="mb-1 small">Офіс-менеджер</h6>
									</div>
									<div class="col-md-6 col-xs-12 text-md-left text-center">
										<a href="tel:+380957385157">+380957385157</a><br>
										<a href="whatsapp://send?phone=380973596016">+380973596016</a><br>
										<small><a href="mailto:viktoria.yr.intl.e.a@gmail.com"><b><i>viktoria@gmail.com</i></b></a><br></small>
									</div>
								</div>
							</div>

							<div class="col-xs-6 col-md-12 col-sm-6 py-3">
								<div class="row">
									<div class="col-md-6 col-xs-12 text-md-right text-center mb-md-0 mb-2">
										<h4 class="mb-1">Наталія</h4>
										<h6 class="mb-1 small">Менеджер</h6>
									</div>
									<div class="col-md-6 col-xs-12 text-md-left text-center">
										<a href="tel:+380957385157">+380973596016</a><br>
										<a href="viber://add?number=%2B380932015668">+380932015668</a><br>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-xs-12">
						<div class="p-5">
							<h4 class="text-center font-extra-bold text-white">Безкоштовний консультаційний центр</h4>
						</div>
						<div class="text-white text-center font-bold">
							<p>Email: <a href="mailto:discoverystore@gmail.com">yrieagency@gmail.com</a></p>
							<p>Телефон: <a href="tel+380677515232">+380668348141</a></p>
							<p>м.Ковель вул.Володимирська 135</p>
							<div id="map" class="w-100 mx-auto border-0 corner-pill"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php get_footer(); ?>