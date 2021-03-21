@include('layouts._head')
@include('layouts.header')
<main class="main">

	<section class="section section__banner section__banner_offset-y">

		<div class="container">
			<div class="row">
				<div class="col-md-6 pr-0">
					<img src="img/industries.jpg" class="img-fluid">
				</div>
				<div class="col-md-6 d-flex align-items-center">
					<div class="industries__icons industries__icons_md industries__icons_bg industries__icons_position d-flex align-items-center justify-content-center">
						<i class="icons icons__industries icons__industries_ecommers"></i>
					</div>
					<h1 class="title-page title-page_offset">E-commerce</h1>
				</div>
			</div>
		</div>

	</section>

	<section class="section section_offset-y-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-7 mx-auto px-4">
					<article class="single-article">
						<p class="single-article__text">Lorem ipsum dolor sit amet,
							consectetur adipiscing elit. Fusce maximus, tortor accumsan imperdiet blandit, ipsum risus
							fermentum velit, et tempus sem est auctor tellus. Nulla vel congue odio. Nunc semper est eu
							dui semper, ac ullamcorper ipsum auctor. Vestibulum ante ipsum primis in faucibus orci
							luctus et ultrices posuere cubilia curae; Interdum et malesuada fames ac ante ipsum primis
							in faucibus. Praesent tempus magna ac risus malesuada, quis rutrum diam viverra. Curabitur
							at dapibus quam sed.
						</p>
						<div class="line-separate line-separate_offset"></div>
						<h2 class="single-article__title single-article__title_offset-sm">What we provide</h2>
						<p class="single-article__text single-article__text_offset">Lorem ipsum dolor sit amet,
							consectetur adipiscing elit. Fusce maximus, tortor accumsan imperdiet blandit, ipsum risus
							fermentum velit, et tempus sem est auctor tellus. Nulla vel congue odio.
						</p>
						<ul class="single-article__list single-article__list_check">
							<li>Full-cycle Android apps development</li>
							<li>Full-cycle iOS apps development</li>
							<li>Full-cycle cross-platform apps development</li>
							<li>Development of apps that interact with smartwatches and other wearables.</li>
							<li>Business analysis of your idea</li>
						</ul>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="section section__project section__project_bg">
		<div class="container">
			<div class="row">
				<div class="col-md-7 mx-auto py-4">
					<h2 class="title title-section_offset color-white">Our projects</h2>
					<div class="project-list project-list_offset">
						<a href="#" class="project-list-item">
							<div class="project-list-item__body blur">
								<h3 class="project-list-item__name mb-3">Slowianka Sp. z.o.o</h3>
								<p class="project-list-item__desc">Lorem ipsum dolor sit amet, consectetur adipiscing
									elit. Fusce maximus, tortor accumsan imperdiet blandit, ipsum risus fermentum velit,
									et tempus sem est auctor tellus. Nulla vel congue odio. </p>
							</div>
							<img src="img/template.png" class="img-fluid d-block mx-auto project-list-item__img"/>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section section__control section_offset-y-sm">
		<div class="container">
			<div class="row">
				<a href="#" class="col-md-6 control">
					<div class="control__header d-flex align-items-center">
						<div class="industries__box-icon industries__box-icon_ecommers">
							<div class="industries__icons industries__icons_sm industries__icons_bg d-flex align-items-center justify-content-center">
								<i class="icons icons__industries icons__industries_ecommers"></i>
							</div>
						</div>
						<span class="title title_offset-control color-black d-flex align-items-center">Automation <i class="icons icons_arrow icons_control-pos"></i></span>
					</div>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce maximus, tortor accumsan imperdiet
						blandit, ipsum risus fermentum velit, et tempus sem est auctor tellus. Nulla vel congue
						odio. </p>
				</a>
				<a href="#" class="col-md-6 control">
					<div class="control__header d-flex align-items-center">
						<div class="industries__box-icon industries__box-icon_education">
							<div class="industries__icons industries__icons_sm industries__icons_bg d-flex align-items-center justify-content-center">
								<i class="icons icons__industries icons__industries_education"></i>
							</div>
						</div>
						<span class="title title_offset-control color-black d-flex align-items-center">Education <i class="icons icons_arrow icons_control-pos"></i></span>
					</div>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce maximus, tortor accumsan imperdiet
						blandit, ipsum risus fermentum velit, et tempus sem est auctor tellus. Nulla vel congue
						odio. </p>
				</a>
			</div>
		</div>
	</section>

	@include('layouts._contact')
</main>
@include('layouts._footerPage')
