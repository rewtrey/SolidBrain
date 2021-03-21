
@extends('layouts.app')


@section('content')

<main class="main">
	<section class="section section-main">
		<canvas id="canvas" class="w-100"></canvas>
		<div class="container container__main">

			<div class="container__title">
				<h1 class="section-main__title">Ми створюємо цифрові технології</h1>
			</div>
			<div class="block-main block-main_offset block-main_bg d-flex justify-content-between align-items-center">
				<div class="block-main__col-left pr-3 pr-lg-0">
					<p class="block-main__text">Наші команди створюють програмні рішення, які допомагають бізнесам
						автоматизувати операції та збільшувати доходи. Ми впроваджуємо інноваційні технології та
						стежимо
						за трендами на ринку.</p>
				</div>
				<div class="block-main__col-center d-md-none">
					<i class="icons icons_scroll mx-auto d-block"></i>
					<i class="icons icons_line mx-auto mt-3 d-block"></i>
				</div>
				<div class="block-main__col-right d-lg-flex justify-content-lg-end align-items-lg-center">
					<a href="#" class="btn btn__default btn_lg mb-3 mb-lg-0 mr-lg-4">Free Project Extimate</a>
					<a href="#" class="btn btn__link btn__link_black btn_lg d-flex align-items-center">
						<span class="btn__name">Our Portfolio</span>
						<svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.35355 4.35355C7.54882 4.15829 7.54882 3.84171 7.35355 3.64645L4.17157 0.464466C3.97631 0.269204 3.65973 0.269204 3.46447 0.464466C3.2692 0.659729 3.2692 0.976311 3.46447 1.17157L6.29289 4L3.46447 6.82843C3.2692 7.02369 3.2692 7.34027 3.46447 7.53553C3.65973 7.7308 3.97631 7.7308 4.17157 7.53553L7.35355 4.35355ZM-4.37114e-08 4.5L7 4.5L7 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
								  fill="#F0F3F6"/>
						</svg>
					</a>
				</div>
			</div>

		</div>
	</section>

	<section class="section section__services section_offset-y">
		<div class="container">
			<div class="row">
				<span class="block__label col-12">services</span>
				<div class="col-md-6 block block_offset-right">
					<h2 class="block__title">Що ми можемо запропонувати?</h2>
				</div>
				<div class="col-md-6 block pl-md-0">
					<p class="block__text block__text_border">Прийшов час перетворити складні бізнес-завдання в
						глобальні ІТ-рішення -
						поліпшити якість обслуговування клієнтів і операційну ефективність, а також зміцнити ваше
						конкурентну перевагу.</p>
				</div>
				<div class="col-12">
					<div class="services services_offset services_bg row mx-0">
						<div class="col-6 nav__tab nav__tab_bg p-0 d-none d-lg-block">
							<div class="nav-tab nav-tab_offset nav-tab_blur">
								<div class="nav flex-column" role="tablist">
									<a class="nav__button nav__button_h nav__button_offset nav-link d-block active js-carousel-tab" data-target="#carouselServices" data-slide-to="0">Software Development</a>
									<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselServices" data-slide-to="1">Software Testing and QA</a>
									<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselServices" data-slide-to="2">Web Design</a>
									<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselServices" data-slide-to="3">B2B eCommerce solution</a>
									<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselServices" data-slide-to="4">Full-Cycle Product
										Development</a>
									<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselServices" data-slide-to="5">Dedicated Software
										Development team</a>
									<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselServices" data-slide-to="6">Support & Maintenance</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 p-0">
							@include('layouts._services-carousel')
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section__technologies">
		<div class="container">
			<div class="row">
				<div class="col-12 block_offset-m text-center">
					<span class="block__label col-12">technologies</span>
					<h2 class="block__title">Ми працюємо з такими ніштяками</h2>
				</div>
			</div>
			<div class="row grid mx-0">
				<div class="grid__item grid__item_offset col-4">
					<div class="tech">
						<i class="icons icons__tech icons__tech_web"></i>
						<span class="tech__name d-block my-3">Web</span>
						<span class="tech__text d-block">HTML5, JAVASCRIPT, .NET, NODE JS, ANGULAR, VUE.JS, JAVA</span>
					</div>
				</div>
				<div class="grid__item grid__item_offset col-4">
					<div class="tech">
						<i class="icons icons__tech icons__tech_mob"></i>
						<span class="tech__name d-block my-3">Mobile</span>
						<span class="tech__text d-block">HTML5, JAVASCRIPT, .NET, NODE JS, ANGULAR, VUE.JS, JAVA</span>
					</div>
				</div>
				<div class="grid__item grid__item_offset col-4">
					<div class="tech">
						<i class="icons icons__tech icons__tech_cloud"></i>
						<span class="tech__name d-block my-3">Cloud</span>
						<span class="tech__text d-block">HTML5, JAVASCRIPT, .NET, NODE JS, ANGULAR, VUE.JS, JAVA</span>
					</div>
				</div>
				<div class="grid__item grid__item_offset col-4">
					<div class="tech">
						<i class="icons icons__tech icons__tech_digital"></i>
						<span class="tech__name d-block my-3">Digital</span>
						<span class="tech__text d-block">HTML5, JAVASCRIPT, .NET, NODE JS, ANGULAR, VUE.JS, JAVA</span>
					</div>
				</div>
				<div class="grid__item grid__item_offset col-4">
					<div class="tech">
						<i class="icons icons__tech icons__tech_desktop"></i>
						<span class="tech__name d-block my-3">Desktop</span>
						<span class="tech__text d-block">HTML5, JAVASCRIPT, .NET, NODE JS, ANGULAR, VUE.JS, JAVA</span>
					</div>
				</div>
				<div class="grid__item grid__item_offset col-4">
					<div class="tech">
						<i class="icons icons__tech icons__tech_test"></i>
						<span class="tech__name d-block my-3">Testing</span>
						<span class="tech__text d-block">HTML5, JAVASCRIPT, .NET, NODE JS, ANGULAR, VUE.JS, JAVA</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section section__benefits section_offset-y">
		<div class="container">
			<div class="row">
				<div class="col-6 d-none d-lg-block">
					<img src="img/benefits.jpg" class="img-responsive">
				</div>
				<div class="col-lg-6 block block_offset-left">
					<span class="block__label">why Solid Brain?</span>
					<h2 class="block__title block__title_offset">А знаєте чо треба обирати саме нас? А ми вам ща
						розкажем </h2>
					<p class="block__text">Тут раніше був прикольніший текст, але дизайнерєсса вирішила, що його
						забагато і
						треба трохи скоротити шоб контент дишав</p>
				</div>
				<div class="col-12 d-lg-none mt-5">
					<img src="img/benefits.jpg" class="img-responsive">
				</div>
				<div class="col-12">
					<div class="row benefits benefits_offset justify-content-center justify-content-lg-between mx-lg-0">
						<div class="benefits__item benefits__item_offset benefits__item_col">
					<span class="benefits__name benefits__block benefits__block_offset benefits__block_front d-flex align-items-center">
						Ми приймаємо правильні рішення
					</span>
							<div class="benefits__block benefits__block_offset benefits__block_back d-flex align-items-center">
								<div>
									<i class="icons icons_benefits"></i>
									<p class="benefits__text p-t-30">Для нас якість завжди має найвищий пріоритет при
										розробці
										складних
										систем</p>
								</div>
							</div>
						</div>
						<div class="benefits__item benefits__item_offset benefits__item_col">
					<span class="benefits__name benefits__block benefits__block_offset benefits__block_front d-flex align-items-center">
						Ми виконуємо свою роботу вчасно
					</span>
							<div class="benefits__block benefits__block_offset benefits__block_back d-flex align-items-center">
								<div>
									<i class="icons icons_benefits"></i>
									<p class="benefits__text p-t-30">Для нас якість завжди має найвищий пріоритет при
										розробці
										складних
										систем</p>
								</div>
							</div>
						</div>
						<div class="benefits__item benefits__item_offset benefits__item_col">
					<span class="benefits__name benefits__block benefits__block_offset benefits__block_front d-flex align-items-center">
						Ми робимо свою роботу вчасно
					</span>
							<div class="benefits__block benefits__block_offset benefits__block_back d-flex align-items-center">
								<div>
									<i class="icons icons_benefits"></i>
									<p class="benefits__text p-t-30">Для нас якість завжди має найвищий пріоритет при
										розробці
										складних
										систем</p>
								</div>
							</div>
						</div>
						<div class="benefits__item benefits__item_offset benefits__item_col">
					<span class="benefits__name benefits__block benefits__block_offset benefits__block_front d-flex align-items-center">
						Ми завжди на зв’язку з вами
					</span>
							<div class="benefits__block benefits__block_offset benefits__block_back d-flex align-items-center">
								<div>
									<i class="icons icons_benefits"></i>
									<p class="benefits__text p-t-30">Для нас якість завжди має найвищий пріоритет при
										розробці
										складних
										систем</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section__industries section_offset-b">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 px-4 block block_offset-m text-center mx-auto">
					<span class="block__label col-12">industries</span>
					<h2 class="block__title">Ми понаробили вже кучу проектів в самих різних галузях</h2>
				</div>

				<div class="col-12 industries">
					<div class="row m-0 justify-content-center">
						<a href="#"
						   class="col-4 col-lg industries__item industries__item_h d-flex align-items-center justify-content-center">
							<div class="industries__body">
								<div class="industries__box-icon industries__box-icon_ecommers">
									<div class="industries__icons industries__icons_sm industries__icons_bg d-flex align-items-center justify-content-center">
										<i class="icons icons__industries icons__industries_ecommers"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#"
						   class="col-4 col-lg industries__item industries__item_h d-flex align-items-center justify-content-center">
							<div class="industries__body">
								<div class="industries__box-icon industries__box-icon_automotive">
									<div class="industries__icons industries__icons_sm industries__icons_bg d-flex align-items-center justify-content-center">
										<i class="icons icons__industries icons__industries_automotive"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="# "
						   class="col-4 col-lg industries__item industries__item_h d-flex align-items-center justify-content-center">
							<div class="industries__body">
								<div class="industries__box-icon industries__box-icon_automation">
									<div class="industries__icons industries__icons_sm industries__icons_bg d-flex align-items-center justify-content-center">
										<i class="icons icons__industries icons__industries_automation"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#"
						   class="col-4 col-lg industries__item industries__item_h d-flex align-items-center justify-content-center">
							<div class="industries__body">
								<div class="industries__box-icon industries__box-icon_education">
									<div class="industries__icons industries__icons_sm industries__icons_bg d-flex align-items-center justify-content-center">
										<i class="icons icons__industries icons__industries_education"></i>
									</div>
								</div>
							</div>
						</a>
						<a href="#"
						   class="col-4 col-lg industries__item industries__item_h d-flex align-items-center justify-content-center">
							<div class="industries__body">
								<div class="industries__box-icon industries__box-icon_travel">
									<div class="industries__icons industries__icons_sm industries__icons_bg d-flex align-items-center justify-content-center">
										<i class="icons icons__industries icons__industries_travel"></i>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section__task-assessment">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-between">
				<h2 class="title-h2">DO YOU HAVE A CHALLENGE FOR US?</h2>
				<a href="#" class="btn btn__default btn_lg">Free project estimate</a>
			</div>
		</div>
	</section>

	<section class="section section__project section__project_offset section__project_bg"
			 style="background-image: url(img/slowianka.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="block block_offset-m text-center text-lg-left">
						<span class="block__label">our work</span>
						<h2 class="block__title block__title_white">Результати багаторічної роботи</h2>
					</div>
				</div>
				<div class="col-lg-5 col-xl-4 d-none d-lg-block">
					<div class="nav-wrapper nav-wrapper_offset nav-wrapper_blur">
						<div class="nav flex-column" role="tablist">
							<a class="nav__button nav__button_h nav__button_offset nav-link d-block active js-carousel-tab" data-target="#carouselProject" data-slide-to="0">Slowianka Sp. z.o.o</a>
							<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselProject" data-slide-to="1">Trident Travel</a>
							<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselProject" data-slide-to="2">Auto Standart Group</a>
							<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselProject" data-slide-to="3">Avelana Gold</a>
							<a class="nav__button nav__button_h nav__button_offset nav-link d-block js-carousel-tab" data-target="#carouselProject" data-slide-to="4">GPL</a>
						</div>
						<a href="#" class="btn btn__default btn_lg">See all projects</a>
					</div>
				</div>
				<div class="col-lg-7 col-xl-8 pl-5">
					@include('layouts._project-carousel')
				</div>
			</div>
		</div>
	</section>


	<section class="section section__reviews section_offset-y">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 block block_offset-right-xl mb-5 mb-lg-0">
					<span class="block__label">testimonials</span>
					<h2 class="block__title">Наші клієнти поділились оцінкою нашої співпраці</h2>
					<div class="d-flex align-items-center mt-5 pt-5">
						<a href="#" class="btn btn__default btn_lg">Check all on CLUTCH</a>
						<div class="carousel-arrow d-flex align-items-center ml-5">
							<a class="carousel-control carousel-control-prev" href="#carouselReviewsControls"
							   role="button"
							   data-slide="prev">
								<svg width="12" height="16" viewBox="0 0 12 16" fill="none"
									 xmlns="http://www.w3.org/2000/svg">
									<path d="M0.292893 7.29289C-0.0976314 7.68342 -0.0976315 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538407 7.04738 0.538407 6.65685 0.928932L0.292893 7.29289ZM12 7L1 7L1 9L12 9L12 7Z"
										  fill="#C9CFD8"/>
								</svg>
								<span class="sr-only">Previous</span>
							</a>
							<span class="carousel-counter carousel-counter_offset js-carousel-counter" data-counter="#carouselReviewsControls"></span>
							<a class="carousel-control carousel-control-next" href="#carouselReviewsControls"
							   role="button"
							   data-slide="next">
								<svg width="12" height="16" viewBox="0 0 12 16" fill="none"
									 xmlns="http://www.w3.org/2000/svg">
									<path d="M11.7071 8.70711C12.0976 8.31658 12.0976 7.68342 11.7071 7.29289L5.34315 0.928932C4.95262 0.538407 4.31946 0.538407 3.92893 0.928932C3.53841 1.31946 3.53841 1.95262 3.92893 2.34315L9.58579 8L3.92893 13.6569C3.53841 14.0474 3.53841 14.6805 3.92893 15.0711C4.31946 15.4616 4.95262 15.4616 5.34315 15.0711L11.7071 8.70711ZM8.74228e-08 9L11 9L11 7L-8.74228e-08 7L8.74228e-08 9Z"
										  fill="#C9CFD8"/>
								</svg>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 block">
					<div id="carouselReviewsControls"
						 class="carousel slide carousel__fade carousel_offset carousel_box carousel_quotes"
						 data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item js-carousel-item active">
								<div class="reviews reviews_offset reviews_box reviews_quotes">
									<p class="reviews__text reviews__text_h">The new system has thousands of customers
										accessing it
										daily
										with only positive feedback provided. It is well-built, stable, and works
										efficiently and smoothly. The team was professional, managed the project well,
										and
										provided reliable feedback throughout.</p>
									<div class="customer d-flex">
										<img src="img/reviews-logo.jpg" class="img-fluid"/>
										<div class="pl-3">
											<span class="customer__name d-block mb-2">Auto Standart Group</span>
											<a href="#"
											   class="btn btn__outline btn__outline_default-default align-items-center">
												Check on CLUTCH
												<svg width="8" height="8" viewBox="0 0 8 8" fill="none">
													<path d="M7.35355 4.35355C7.54882 4.15829 7.54882 3.84171 7.35355 3.64645L4.17157 0.464466C3.97631 0.269204 3.65973 0.269204 3.46447 0.464466C3.2692 0.659729 3.2692 0.976311 3.46447 1.17157L6.29289 4L3.46447 6.82843C3.2692 7.02369 3.2692 7.34027 3.46447 7.53553C3.65973 7.7308 3.97631 7.7308 4.17157 7.53553L7.35355 4.35355ZM-4.37114e-08 4.5L7 4.5L7 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
														  fill="#F0F3F6"/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item js-carousel-item">
								<div class="reviews reviews_offset reviews_box">
									<p class="reviews__text reviews__text_h">The new system has thousands of customers
										accessing it
										daily
										with only positive feedback provided. It is well-built, stable, and works
										efficiently and smoothly. The team was professional.</p>
									<div class="customer d-flex">
										<img src="img/reviews-logo-2.jpg" class="img-fluid"/>
										<div class="pl-3">
											<span class="customer__name d-block mb-2">GPL</span>
											<a href="#"
											   class="btn btn__outline btn__outline_default align-items-center">
												Check on CLUTCH
												<svg width="8" height="8" viewBox="0 0 8 8" fill="none">
													<path d="M7.35355 4.35355C7.54882 4.15829 7.54882 3.84171 7.35355 3.64645L4.17157 0.464466C3.97631 0.269204 3.65973 0.269204 3.46447 0.464466C3.2692 0.659729 3.2692 0.976311 3.46447 1.17157L6.29289 4L3.46447 6.82843C3.2692 7.02369 3.2692 7.34027 3.46447 7.53553C3.65973 7.7308 3.97631 7.7308 4.17157 7.53553L7.35355 4.35355ZM-4.37114e-08 4.5L7 4.5L7 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
														  fill="#F0F3F6"/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item js-carousel-item">
								<div class="reviews reviews_offset reviews_box reviews_quotes">
									<p class="reviews__text reviews__text_h">The new system has thousands of customers
										accessing it
										daily
										with only positive feedback provided. It is well-built, stable, and works
										efficiently and smoothly. The team was professional, managed the project well,
										and
										provided reliable feedback throughout.</p>
									<div class="customer d-flex">
										<img src="img/reviews-logo.jpg" class="img-fluid"/>
										<div class="pl-3">
											<span class="customer__name d-block mb-2">Auto Standart Group</span>
											<a href="#"
											   class="btn btn__outline btn__outline_default align-items-center">
												Check on CLUTCH
												<svg width="8" height="8" viewBox="0 0 8 8" fill="none">
													<path d="M7.35355 4.35355C7.54882 4.15829 7.54882 3.84171 7.35355 3.64645L4.17157 0.464466C3.97631 0.269204 3.65973 0.269204 3.46447 0.464466C3.2692 0.659729 3.2692 0.976311 3.46447 1.17157L6.29289 4L3.46447 6.82843C3.2692 7.02369 3.2692 7.34027 3.46447 7.53553C3.65973 7.7308 3.97631 7.7308 4.17157 7.53553L7.35355 4.35355ZM-4.37114e-08 4.5L7 4.5L7 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
														  fill="#F0F3F6"/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="section section__team ">
		<div class="container">
			<div class="row">
				<div class="col-md-8 block block_offset-m text-center mx-auto">
					<span class="block__label col-12">our team</span>
					<h2 class="block__title">Зацініть які ми всі красіві і професіональні. Ночі не спимо, дайте тільки
						поработать </h2>
					<a href="#" class="btn btn__default btn_lg btn_w btn_offset-t justify-content-center">Meet our
						team</a>
				</div>

				<div class="col-12 team team_offset team_bg">
					<div class="row m-0 justify-content-end align-items-center">
						<div class="team__item">
							<img src="img/team-1.jpg" class="img-fluid"/>
						</div>
						<div class="team__item">
							<img src="img/team-2.jpg" class="img-fluid"/>
						</div>
						<div class="team__item">
							<img src="img/team-3.jpg" class="img-fluid"/>
						</div>
						<div class="team__item">
							<img src="img/team-4.jpg" class="img-fluid"/>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section section__article section_offset-y">
		<div class="container">
			<div class="row">
				<div class="col-md-6 block block_offset-m text-center mx-auto">
					<span class="block__label col-12">blog</span>
					<h2 class="block__title">В нас є новини!</h2>
					<a href="#" class="btn btn__default btn_lg btn_w btn_offset-t justify-content-center">See all
						articles</a>
				</div>
			</div>
			<div class="row article">
				<div class="col-md-4">
					<article class="article__item">
						<a href="#" class="d-block">
							<picture>
								<source srcset="img/news-1.webp" type="image/webp">
								<source srcset="img/news-1.jpg" type="image/jpeg">
								<img src="img/news-1.jpg" class="img-fluid" alt="Alt Text!">
							</picture>
							<h2 class="article__title mt-3 mb-1">Як не повбивати сотрудніків?</h2>
							<span class="article__date">26.02.2021</span>
						</a>
					</article>
				</div>
				<div class="col-md-4">
					<article class="article__item">
						<a href="#" class="d-block">
							<picture>
								<source srcset="img/news-2.webp" type="image/webp">
								<source srcset="img/news-2.jpg" type="image/jpeg">
								<img src="img/news-2.jpg" class="img-fluid" alt="Alt Text!">
							</picture>
							<h2 class="article__title mt-3 mb-1">Пошли заказчіка грамотно</h2>
							<span class="article__date">26.02.2021</span>
						</a>
					</article>
				</div>
				<div class="col-md-4">
					<article class="article__item">
						<a href="#" class="d-block">
							<picture>
								<source srcset="img/news-3.webp" type="image/webp">
								<source srcset="img/news-3.jpg" type="image/jpeg">
								<img src="img/news-3.jpg" class="img-fluid" alt="Alt Text!">
							</picture>
							<h2 class="article__title mt-3 mb-1">Пни начальніка і виживи</h2>
							<span class="article__date">26.02.2021</span>
						</a>
					</article>
				</div>
			</div>
		</div>
	</section>
	@include('layouts._contact')
</main>
@include('layouts._footerIndex')
@endsection
