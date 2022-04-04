<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		<?php
		$APPLICATION->AddHeadScript('/local/templates/kplab_atomic/js/scripts-all.js');
		$APPLICATION->AddHeadScript('/local/templates/kplab_atomic/js/main.js');
		?>
	</head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">
			<header class="templateux-navbar dark" role="banner">
				<div class="container"  data-aos="fade-down">
					<div class="row">
						<div class="col-3 templateux-logo">
							<a href="index.html" class="animsition-link">Atomic</a>
						</div>
						<nav class="col-9 site-nav">
							<button class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
							</button> <!-- .templateux-toggle -->
							<ul class="sf-menu templateux-menu d-none d-md-block">
								<li class="active"><a href="index.html" class="animsition-link">Home</a></li>
								<li><a href="about.html" class="animsition-link">About</a></li>
								<li><a href="services.html" class="animsition-link">Services</a>
									<ul>
										<li><a href="#">Service 1</a></li>
										<li><a href="#">Service 2</a></li>
										<li><a href="#">Service 3</a>
											<ul>
												<li><a href="#">Service 1</a></li>
												<li><a href="#">Service 2</a></li>
												<li><a href="#">Service 3</a>
													<ul>
														<li><a href="#">Service 1</a></li>
														<li><a href="#">Service 2</a></li>
														<li><a href="#">Service 3</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="gallery.html" class="animsition-link">Gallery</a></li>
								<li><a href="blog.html" class="animsition-link">Blog</a></li>
								<li><a href="contact.html" class="animsition-link">Contact</a></li>
							</ul> <!-- .templateux-menu -->
						</nav> <!-- .site-nav -->
					</div> <!-- .row -->
				</div> <!-- .container -->
			</header> <!-- .templateux-navbar -->
			<div class="templateux-cover" style="background-image: url(images/slider-1.jpg);">
				<div class="container">
					<div class="row align-items-lg-center">
						<div class="col-lg-6 text-center order-lg-2">
							<a href="https://vimeo.com/channels/staffpicks/93951774"  data-fancybox class="templateux-block-play"><span class="ion-ios-play"></span></a>
						</div>
						<div class="col-lg-6 order-lg-1">
							<h1 class="heading mb-3" data-aos="fade-up">Design a better website template.</h1>
							<p class="lead mb-5" data-aos="fade-up"  data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary py-3 px-4">Free Download</a></p>
						</div>
					</div>
				</div>
			</div> <!-- .templateux-cover -->
			<div class="templateux-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 templateux-overlap">
							<div class="row">
								<div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
									<div class="media block-icon-1 d-block text-left">
										<div class="icon mb-3"><span class="ion-ios-lightbulb-outline"></span></div>
										<div class="media-body">
											<h3 class="h5 mb-4">Intuitive Thinking</h3>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div> <!-- .block-icon-1 -->
								</div>
								<div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
									<div class="media block-icon-1 d-block text-left">
										<div class="icon mb-3"><span class="ion-ios-nutrition-outline"></span></div>
										<div class="media-body">
											<h3 class="h5 mb-4">Orange for Carrots</h3>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div> <!-- .block-icon-1 -->
								</div>
								<div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
									<div class="media block-icon-1 d-block text-left">
										<div class="icon mb-3"><span class="ion-ios-infinite-outline"></span></div>
										<div class="media-body">
											<h3 class="h5 mb-4">Infinite Posibilities</h3>
											<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
										</div>
									</div> <!-- .block-icon-1 -->
								</div>

							</div>
						</div>
					</div>
				</div>
			</div> <!-- .templateux-section -->
			<div class="templateux-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12 block-heading-wrap" data-aos="fade-up">
							<h2 class="heading mb-5 text-center">Good Design is a Good Start</h2>
						</div>
					</div> <!-- .row -->
					<div class="row mb-5" data-aos="fade-up">
						<div class="col-md-6">
							<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. <a href="#">Separated they live in Bookmarksgrove</a> right at the coast of the Semantics, a large language ocean.</p>
						</div>
						<div class="col-md-6">
							<p> When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						</div>
					</div>
				</div> <!-- .container -->
				<div class="container-fluid"  data-aos="fade-up">
					<div class="owl-carousel wide-slider">
						<div class="item">
							<img src="images/slider-2.jpg" alt="Free template by TemplateUX.com" class="img-fluid">
						</div>
						<div class="item">
							<img src="images/slider-3.jpg" alt="Free template by TemplateUX.com" class="img-fluid">
						</div>
						<div class="item">
							<img src="images/slider-4.jpg" alt="Free template by TemplateUX.com" class="img-fluid">
						</div>
					</div> <!-- .owl-carousel -->
				</div>
			</div> <!-- .templateux-section -->
			<div class="templateux-section bg-light">
				<div class="container">
					<div class="row mb-5">
						<div class="col-md-4 mb-4" data-aos="fade-up">
							<div class="media block-icon-1 d-block text-center">
								<div class="icon mb-3"><span class="ion-ios-loop"></span></div>
								<div class="media-body">
									<h3 class="h5 mb-4">Regular Update</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div> <!-- .block-icon-1 -->
						</div>
						<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
							<div class="media block-icon-1 d-block text-center">
								<div class="icon mb-3"><span class="ion-ios-infinite-outline"></span></div>
								<div class="media-body">
									<h3 class="h5 mb-4">Infinite Posibilities</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div> <!-- .block-icon-1 -->
						</div>
						<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
							<div class="media block-icon-1 d-block text-center">
								<div class="icon mb-3"><span class="ion-ios-locked-outline"></span></div>
								<div class="media-body">
									<h3 class="h5 mb-4">Good Security</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div> <!-- .block-icon-1 -->
						</div>

						<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
							<div class="media block-icon-1 d-block text-center">
								<div class="icon mb-3"><span class="ion-ios-nutrition-outline"></span></div>
								<div class="media-body">
									<h3 class="h5 mb-4">Orange for Carrots</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div> <!-- .block-icon-1 -->
						</div>
						<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
							<div class="media block-icon-1 d-block text-center">
								<div class="icon mb-3"><span class="ion-ios-lightbulb-outline"></span></div>
								<div class="media-body">
									<h3 class="h5 mb-4">Intuitive Thinking</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div> <!-- .block-icon-1 -->
						</div>
						<div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
							<div class="media block-icon-1 d-block text-center">
								<div class="icon mb-3"><span class="ion-ios-videocam-outline"></span></div>
								<div class="media-body">
									<h3 class="h5 mb-4">Play Video</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div> <!-- .block-icon-1 -->
						</div>

					</div>
					<div class="row">

						<div class="col-md-12 text-center" data-aos="fade-up" data-aos-delay="100">
							<p><a href="#" class="btn btn-black py-3 px-4">More Features</a></p>
						</div>
					</div>
				</div>
			</div> <!-- .templateux-section -->
			<div class="templateux-section">
				<div class="d-flex flex-column flex-sm-row">
					<a href="#" class="block-thumbnail-1 one-third" style="background-image: url('images/slider-2.jpg'); " data-aos="fade">
						<div class="block-thumbnail-content">
							<h2>When she reached the first</h2>
							<span class="post-meta">Design, Illustration</span>
						</div>
					</a>
					<a href="#" class="block-thumbnail-1 two-third" style="background-image: url('images/slider-1.jpg'); " data-aos="fade" data-aos-delay="100">
						<div class="block-thumbnail-content">
							<h2>Duden flows by their place</h2>
							<span class="post-meta">Design, Illustration</span>
						</div>
					</a>
				</div>
				<div class="d-flex flex-column flex-sm-row">
					<a href="#" class="block-thumbnail-1 two-third" style="background-image: url('images/slider-3.jpg'); " data-aos="fade" data-aos-delay="200">
						<div class="block-thumbnail-content">
							<h2>Italic Mountains</h2>
							<span class="post-meta">Design, Illustration</span>
						</div>
					</a>
					<a href="#" class="block-thumbnail-1 one-third" style="background-image: url('images/slider-4.jpg'); " data-aos="fade" data-aos-delay="300">
						<div class="block-thumbnail-content">
							<h2>Behind the word mountains</h2>
							<span class="post-meta">Design, Illustration</span>
						</div>
					</a>
				</div>
			</div> <!-- .templateux-section -->
			<div class="templateux-section bg-primary" id="templateux-counter-section">
				<div class="container">
					<div class="row">
						<div class="col-md">
							<div class="templateux-counter text-center">
								<span class="templateux-number" data-number="99399">0</span>
								<span class="templateux-label">Lines of Codes</span>
							</div>
						</div>
						<div class="col-md">
							<div class="templateux-counter text-center">
								<span class="templateux-number" data-number="99">0</span>
								<span class="templateux-label">Number of Projects</span>
							</div>
						</div>
						<div class="col-md">
							<div class="templateux-counter text-center">
								<span class="templateux-number" data-number="124">0</span>
								<span class="templateux-label">Number of Clients</span>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- .templateux-section -->
			<div class="templateux-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 testimonial-wrap">
							<div class="quote">&ldquo;</div>
							<div class="owl-carousel wide-slider-testimonial">
								<div class="item">
									<blockquote class="block-testomonial">
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
								<div class="item">
									<blockquote class="block-testomonial">
										<p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
									</blockquote>
								</div>
								<div class="item">
									<blockquote class="block-testomonial">
										<p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .templateux-section -->