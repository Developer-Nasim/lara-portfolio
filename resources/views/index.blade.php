@extends('layouts.frontend')
@section('frontcontent')
 
	<!-- header start -->
	<header class="header-transparent">
		<div id="sticky-header" class="header-area">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-3">
						<div class="logo">
							<a class="navbar-brand standard-logo" href="index-2.html">
								<img src="{{ asset('frontend/img/logo/logo.png') }}" alt="">
							</a>
							<a class="navbar-brand retina-logo" href="index-2.html">
								<img src="{{ asset('frontend/img/logo/logo%402x.png') }}" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="main-menu text-right">
							<nav class="navbar navbar-expand-lg">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
									aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-icon"></span>
									<span class="navbar-icon"></span>
									<span class="navbar-icon"></span>
								</button>

								<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
									<ul class="navbar-nav">
										<li class="nav-item active">
											<a class="nav-link" href="#home">Home </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#about">about </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#wedo">We Do</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#portfolio">Portfolio </a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#resume">Resume</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#blog">Blog</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#contact">Contact</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div> 
				</div>
			</div> 
		</div>
	</header>
	<!-- header end -->
	<!-- slider-area-start -->
	<div id="home" class="slider-area slide-bg pl-200">
		<div class="sliders-icon">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-behance"></i></a>
		</div>
		<div class="home-arrow d-none d-xl-block ">
			<a href="#about" class="smoth-scroll">
				scroll <i class="fas fa-arrow-right"></i>
			</a>
		</div>
		<div class="shape"><h1>Designer</h1></div>
		<div class="slider-active">
			<div class="single-slider slider-height d-flex align-items-end">
				<div class="container-fluid">
					<div class="row align-items-end">
						<div class="col-xl-8 col-lg-8">
							<div class="slider-content">
								<span data-animation="fadeInUp" data-delay=".2s">Story Telling, Branding And Digital Experienc</span>
								<h1 data-animation="fadeInUp" data-delay=".4s">Arista William</h1>
								<a data-animation="fadeInLeft" data-delay=".6s" class="btn smoth-scroll" href="#wedo">What I Do</a>
								<div class="slider-icon">
									<a data-animation="fadeInRight" data-delay=".8s" class="popup-video" href="https://www.youtube.com/watch?v=LTXD6XZXc3U"><i class="fas fa-play"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 d-none d-xl-block">
							<div class="slider-img " data-animation="fadeInRight" data-delay="1s">
								<img src="{{ asset('frontend/img/slider/me.png') }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- slider-area-end -->

	<!-- about-area-start -->
	<div id="about" class="about-area pt-120 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-5">
					<div class="about-img mb-30" data-tilt data-tilt-perspective="2000">
						<img src="{{ asset('frontend/img/about/1.png') }}" alt="" />
					</div>
				</div>
				<div class="col-xl-7 col-lg-7">
					<div class="about-wrapper">
						<div class="about-text">
							<span>Profesional Profile</span>
							<h1>There Is All About Me</h1>
						</div>
						<div class="row">
							<div class="col-xl-12">
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-md-6 mb-30">
										<div class="single-about mb-50">
											<div class="abouts-img">
												<img src="{{ asset('frontend/img/icon/1.png') }}" alt="" />
											</div>
											<div class="about-content">
												<span>Full Name</span>
												<h3>Kene Williamson</h3>
											</div>
										</div>
										<div class="single-about">
											<div class="abouts-img">
												<img src="{{ asset('frontend/img/icon/2.png') }}" alt="" />
											</div>
											<div class="about-content">
												<span>Email address</span>
												<h3>info@mail.com</h3>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 mb-30">
										<div class="single-about mb-50">
											<div class="abouts-img">
												<img src="{{ asset('frontend/img/icon/3.png') }}" alt="" />
											</div>
											<div class="about-content">
												<span>Phone number</span>
												<h3>+1 908-736-1801</h3>
											</div>
										</div>
										<div class="single-about">
											<div class="abouts-img">
												<img src="{{ asset('frontend/img/icon/4.png') }}" alt="" />
											</div>
											<div class="about-content">
												<span>skype</span>
												<h3>kinggo.pilati</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- about-area-end -->

	<!-- services-area-start -->
	<div id="wedo" class="services-area pt-115 pb-90 gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title text-center mb-80">
						<span>services</span>
						<h1>What We Do</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="services-wrapper mb-30">
						<div class="servces-img">
							<img src="{{ asset('frontend/img/icon/icon1.png') }}" alt="" />
						</div>
						<div class="services-text">
							<h2>Graphic Design</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="#"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="services-wrapper mb-30">
						<div class="servces-img">
							<img src="{{ asset('frontend/img/icon/icon2.png') }}" alt="" />
						</div>
						<div class="services-text">
							<h2>Web Design</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="#"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="services-wrapper mb-30">
						<div class="servces-img">
							<img src="{{ asset('frontend/img/icon/icon3.png') }}" alt="" />
						</div>
						<div class="services-text">
							<h2>SEO Marketing</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="#"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="services-wrapper mb-30">
						<div class="servces-img">
							<img src="{{ asset('frontend/img/icon/icon4.png') }}" alt="" />
						</div>
						<div class="services-text">
							<h2>Consulting</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="#"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="services-wrapper mb-30">
						<div class="servces-img">
							<img src="{{ asset('frontend/img/icon/icon5.png') }}" alt="" />
						</div>
						<div class="services-text">
							<h2>Barnding Design</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="#"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="services-wrapper mb-30">
						<div class="servces-img">
							<img src="{{ asset('frontend/img/icon/icon6.png') }}" alt="" />
						</div>
						<div class="services-text">
							<h2>24/7 Support</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="#"><i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- services-area-end -->
	
	<!-- let-work-area-start -->
	<div class="let-work-area pt-120 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-7">
					<div class="let-work-wrapper mb-30" style="background-image:url({{ asset('frontend/img/bg/1.jpg') }})">
						<div class="lat-work-text">
							<span>we are here</span>
							<h1>Let's Work Together On Your Next Project</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
							<a class="btn" href="#">Hire Me Now</a>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-5">
					<div class="progress-wrapper mb-30">
						<div class="progress-text">
							<h1>Every Day is a New Challenge For Us</h1>
						</div>
						<div class="single-skill mb-40">
							<div class="bar-title">
								<h4>Web Design & Development</h4>
							</div>
							<div class="progress">
								<div class="progress-bar wow slideInLeft" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="1s" data-wow-delay=".5s">
									<span>80%</span>
								</div>
							</div>
						</div>
						<div class="single-skill mb-40">
							<div class="bar-title">
								<h4>WordPress And PHP</h4>
							</div>
							<div class="progress">
								<div class="progress-bar wow slideInLeft" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
									<span>85%</span>
								</div>
							</div>
						</div>
						<div class="single-skill mb-40">
							<div class="bar-title">
								<h4>Graphic Design </h4>
							</div>
							<div class="progress">
								<div class="progress-bar wow slideInLeft" role="progressbar" style="width: 98%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
									<span>98%</span>
								</div>
							</div>
						</div>
						<div class="single-skill">
							<div class="bar-title">
								<h4>Frontend & Shopify</h4>
							</div>
							<div class="progress">
								<div class="progress-bar wow slideInLeft" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" data-wow-duration="2s" data-wow-delay=".5s">
									<span>75%</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- let-work-area-end -->

	<!-- portfolio-area-start -->
	<div id="portfolio" class="portfolio-area pb-120 pt-115 gray-bg pr-60 pl-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title text-center mb-75">
						<span>Portfolio</span>
						<h1>An Eye For Details Makes <br> Our Works Exellent</h1>
					</div>
				</div>
				<div class="col-xl-10 col-lg-10 offset-lg-1 offset-xl-1">
					<div class="portfolio-menu mb-50 text-center">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".cat1">web</button>
						<button data-filter=".cat2">ui/ux</button>
						<button data-filter=".cat3"> development</button>
						<button data-filter=".cat4">branding</button>
						<button data-filter=".cat5">photo</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row grid">
			<div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat4">
				<div class="portfolio-wrapper mb-30" data-tilt data-tilt-perspective="3000">
					<div class="portfolio-img">
						<img src="{{ asset('frontend/img/portfolio/1.jpg') }}" alt="">
						<div class="portfolio-text">
							<span>Branding</span>
							<h3><a href="#">Likaoli Limonda</a></h3>
							<div class="portfolio-icon">
								<a class="popup-image" href="{{ asset('frontend/img/portfolio/1.jpg') }}" ><i class="fas fa-search"></i></a>
								<a href="#"><i class="fas fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 grid-item cat5 cat2">
				<div class="portfolio-wrapper mb-30" data-tilt data-tilt-perspective="3000">
					<div class="portfolio-img">
						<img src="{{ asset('frontend/img/portfolio/2.jpg') }}" alt="">
						<div class="portfolio-text">
							<span>Branding</span>
							<h3><a href="#">Likaoli Limonda</a></h3>
							<div class="portfolio-icon">
								<a class="popup-image" href="{{ asset('frontend/img/portfolio/2.jpg') }}" ><i class="fas fa-search"></i></a>
								<a href="#"><i class="fas fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 grid-item cat3 cat4">
				<div class="portfolio-wrapper mb-30" data-tilt data-tilt-perspective="3000">
					<div class="portfolio-img">
						<img src="{{ asset('frontend/img/portfolio/5.jpg') }}" alt="">
						<div class="portfolio-text">
							<span>Branding</span>
							<h3><a href="#">Likaoli Limonda</a></h3>
							<div class="portfolio-icon">
								<a class="popup-image" href="{{ asset('frontend/img/portfolio/5.jpg') }}" ><i class="fas fa-search"></i></a>
								<a href="#"><i class="fas fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat5">
				<div class="portfolio-wrapper mb-30" data-tilt data-tilt-perspective="3000">
					<div class="portfolio-img">
						<img src="{{ asset('frontend/img/portfolio/3.jpg') }}" alt="">
						<div class="portfolio-text">
							<span>Branding</span>
							<h3><a href="#">Likaoli Limonda</a></h3>
							<div class="portfolio-icon">
								<a class="popup-image" href="{{ asset('frontend/img/portfolio/3.jpg') }}" ><i class="fas fa-search"></i></a>
								<a href="#"><i class="fas fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3 cat2">
				<div class="portfolio-wrapper mb-30" data-tilt data-tilt-perspective="3000">
					<div class="portfolio-img">
						<img src="{{ asset('frontend/img/portfolio/4.jpg') }}" alt="">
						<div class="portfolio-text">
							<span>Branding</span>
							<h3><a href="#">Likaoli Limonda</a></h3>
							<div class="portfolio-icon">
								<a class="popup-image" href="{{ asset('frontend/img/portfolio/4.jpg') }}" ><i class="fas fa-search"></i></a>
								<a href="#"><i class="fas fa-link"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="portfolio-button mt-50 text-center">
					<a class="btn" href="#">load More</a>
				</div>
			</div>
		</div>
	</div>
	<!-- portfolio-area-start -->

	<!-- qualification-area-start -->
	<div id="resume" class="qualification-area pt-110 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 mb-15">
					<div class="section-title text-center">
						<span>qualification</span>
					</div>
				</div>
				<div class="col-xl-12">
					<ul class="nav qualification-tab justify-content-center mb-70" id="myTab1" role="tablist">
						<li class="nav-item">
						<a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1">Educations</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" id="profile1-tab" data-toggle="tab" href="#profile1">Experience</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent1">
						<div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab1">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="qualification-wrapper text-center mb-30">
										<div class="qualification-img">
											<img src="{{ asset('frontend/img/icon/tab1.png') }}" alt="" />
										</div>
										<div class="qualification-text">
											<h3>Computer Science</h3>
											<span>Stanford University | 1998 - 2004</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="qualification-wrapper active text-center mb-30">
										<div class="qualification-img">
											<img src="{{ asset('frontend/img/icon/tab2.png') }}" alt="" />
										</div>
										<div class="qualification-text">
											<h3>CSS Diploma</h3>
											<span>Stanford University | 2004 - 2016</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="qualification-wrapper text-center mb-30">
										<div class="qualification-img">
											<img src="{{ asset('frontend/img/icon/tab3.png') }}" alt="" />
										</div>
										<div class="qualification-text">
											<h3>DPR Engineering</h3>
											<span>Stanford University | 2016 - Present</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="qualification-wrapper text-center mb-30">
										<div class="qualification-img">
											<img src="{{ asset('frontend/img/icon/tab1.png') }}" alt="" />
										</div>
										<div class="qualification-text">
											<h3>Frontend Developer</h3>
											<span>BDlebs | 2008 - 2012</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="qualification-wrapper active text-center mb-30">
										<div class="qualification-img">
											<img src="{{ asset('frontend/img/icon/tab2.png') }}" alt="" />
										</div>
										<div class="qualification-text">
											<h3>PHP Developer</h3>
											<span>Design Studio | 2012 - 2015</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-6">
									<div class="qualification-wrapper text-center mb-30">
										<div class="qualification-img">
											<img src="{{ asset('frontend/img/icon/tab3.png') }}" alt="" />
										</div>
										<div class="qualification-text">
											<h3>Java Developer</h3>
											<span>Theme Art | 2016 - Present</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- qualification-area-end -->

	<!-- counter-area-start -->
	<div class="counter-area pt-120 pb-90" style="background-image:url({{ asset('frontend/img/bg/2.jpg') }})">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="counter-wrapper mb-30 text-center">
						<div class="counter-img">
							<img src="{{ asset('frontend/img/counter/1.png') }}" alt="" />
						</div>
						<div class="counter-text">
							<h1 class="counter">385</h1>
							<span>Clients</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="counter-wrapper mb-30 text-center">
						<div class="counter-img">
							<img src="{{ asset('frontend/img/counter/2.png') }}" alt="" />
						</div>
						<div class="counter-text">
							<h1 class="counter">785</h1>
							<span>Projects</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="counter-wrapper mb-30 text-center">
						<div class="counter-img">
							<img src="{{ asset('frontend/img/counter/3.png') }}" alt="" />
						</div>
						<div class="counter-text">
							<h1 class="counter">23</h1>
							<span>Awards</span>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="counter-wrapper mb-30 text-center">
						<div class="counter-img">
							<img src="{{ asset('frontend/img/counter/4.png') }}" alt="" />
						</div>
						<div class="counter-text">
							<h1 class="counter">10</h1>
							<span>Years Experirnce</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- counter-area-end -->

	<!-- testimonial-area-start -->
	<div class="testimonial-area pt-110">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title text-center mb-80">
						<span>testimonials</span>
						<h1>Happy Clients Says</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonial pb-160" style="background-image:url({{ asset('frontend/img/bg/1.png') }})">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
						<div class="testimonial-active owl-carousel">
							<div class="testimonial-wrapper text-center">
								<div class="testimonial-img">
									<img src="{{ asset('frontend/img/testimonial/1.png') }}" alt="" />
								</div>
								<div class="testimonial-text">
									<h3>Johan D. William</h3>
									<span>Founder at UIhub</span>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<div class="testimonial-wrapper text-center">
								<div class="testimonial-img">
									<img src="{{ asset('frontend/img/testimonial/1.png') }}" alt="" />
								</div>
								<div class="testimonial-text">
									<h3>Johan D. William</h3>
									<span>Founder at UIhub</span>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<div class="testimonial-wrapper text-center">
								<div class="testimonial-img">
									<img src="{{ asset('frontend/img/testimonial/1.png') }}" alt="" />
								</div>
								<div class="testimonial-text">
									<h3>Johan D. William</h3>
									<span>Founder at UIhub</span>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<div class="testimonial-wrapper text-center">
								<div class="testimonial-img">
									<img src="{{ asset('frontend/img/testimonial/1.png') }}" alt="" />
								</div>
								<div class="testimonial-text">
									<h3>Johan D. William</h3>
									<span>Founder at UIhub</span>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- testimonial-area-end -->

	<!-- news-area-start -->
	<div id="blog" class="news-area pt-115 pb-90 gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title text-center mb-80">
						<span>news updates</span>
						<h1>Get Every Updates <br> From Here.</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4">
					<div class="news-wrapper mb-30">
						<div class="news-img">
							<a href="blog-details.html"><img src="{{ asset('frontend/img/blog/1.jpg') }}" alt="" /></a>
						</div>
						<div class="news-text">
							<h3><a href="blog-details.html">A series of iOS inspire vector icons.</a></h3>
							<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore.</p>
							<div class="blog-meta">
								<span><a href="blog-details.html">Kene William</a> on February 14, 2018</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<div class="news-wrapper mb-30">
						<div class="news-img">
							<a href="blog-details.html"><img src="{{ asset('frontend/img/blog/2.jpg') }}" alt="" /></a>
						</div>
						<div class="news-text">
							<h3><a href="blog-details.html">Everything You Need To Know About Alig.</a></h3>
							<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore.</p>
							<div class="blog-meta">
								<span><a href="blog-details.html">Robert Mark</a> on February 14, 2018</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<div class="news-wrapper mb-30">
						<div class="news-img">
							<a href="blog-details.html"><img src="{{ asset('frontend/img/blog/3.jpg') }}" alt="" /></a>
						</div>
						<div class="news-text">
							<h3><a href="blog-details.html">The Complete Anatomy Of The Gutenberg.</a></h3>
							<p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore.</p>
							<div class="blog-meta">
								<span><a href="blog-details.html">Jo Haris</a> on February 14, 2018</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- news-area-end -->

	<!-- contact-area-start -->
	<div id="contact" class="contact-area pt-115 pb-105" style="background-image:url({{ asset('frontend/img/bg/2.png') }})">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title text-center mb-60">
						<span>get in touch</span>
						<h1>Drop Us A Line Or <br> Give Us A Ring</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="contact-wrapper">
						<form id="contact-form" action="{{ route('contact.content') }}" id="contact-form">
							@csrf
							<div class="row">
								<div class="col-xl-4 col-lg-4 mb-55">
									<div class="contact-name">
										<input name="name" placeholder="Your name :" type="text">
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 mb-55">
									<div class="contact-email">
										<input name="email" placeholder="info@webmail.com :" type="email">
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 mb-55">
									<div class="contact-phone">
										<input name="phone" placeholder="your phone number :" type="text">
									</div>
								</div>
								<div class="col-xl-12 mb-50">
									<div class="contact-message">
										<textarea name="message" cols="30" rows="10" placeholder="your message :" id="message"></textarea>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="contact-butoon text-center">
										<button class="btn" type="submit">Get An Action</button>
									</div>
								</div>
							</div> 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- contact-area-end -->

	<!-- footer-area-start -->
	<footer>
		<div class="footer-area blue-bg pt-120 pb-120">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
						<div class="footer-wrapper text-center">
							<div class="footer-logo">
								<a href="index-2.html"><img src="{{ asset('frontend/img/logo/footer.png') }}" alt="" /></a>
							</div>
							<div class="footer-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci- didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exe- rcitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
							</div>
							<div class="footer-icon">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-behance-square"></i></a>
								<a href="#"><i class="fab fa-linkedin"></i></a>
								<a href="#"><i class="fab fa-pinterest-square"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright-area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="copyright text-center">
							<p>?? 2019 BDevs, All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer-area-end -->


@endsection
