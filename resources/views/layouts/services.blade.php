@extends('layouts.app')

<main class="main">

	<section class="section section__banner section__banner_offset-t">

		<div class="container">
			<div class="row">
				<div class="col-md-6 banner-col-offset">
					<span class="first-letter">S</span>
					<h1 class="title-page title-page_position col-9 p-0">Software development</h1>
				</div>
				<div class="col-md-6 pl-0">
					<div class="d-flex justify-content-end align-items-end">
						<span class="other-link-text">Check other services</span>
						<img src="img/img-services.jpg" class="img-fluid mb-5"/>
					</div>
					<div class="row mx-0 blur other-link other-link_offset">
						<a href="#" class="col-md-6 other-link__item">Software Testing and QA </a>
						<a href="#" class="col-md-6 other-link__item">Full-Cycle Product Development</a>
						<a href="#" class="col-md-6 other-link__item">Web Design </a>
						<a href="#" class="col-md-6 other-link__item">Dedicated Software Development team</a>
						<a href="#" class="col-md-6 other-link__item">B2B eCommerce solution</a>
						<a href="#" class="col-md-6 other-link__item">Support & Maintenance</a>
					</div>
				</div>
			</div>
		</div>

	</section>

	<section class="section section_offset-y-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-7 mx-auto px-4">
					<article class="single-article">
						<p class="single-article__text single-article__text_offset">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae diam facilisis, tempus
							neque
							pharetra, venenatis lectus. Curabitur eget magna efficitur, ornare lorem vitae, imperdiet
							ligula. Ut non hendrerit lectus. Nam augue neque, luctus dapibus turpis a, tincidunt
							placerat
							ex. Pellentesque ac nisi non purus tristique volutpat ac ut est. Ut sagittis porttitor
							ornare.
							Nunc sit amet viverra lacus. Phasellus tincidunt felis sit amet metus vehicula tristique.
							Praesent porta non odio et blandit. Ut elementum suscipit nulla, et laoreet sapien vehicula
							in.
							Nullam eget pellentesque libero.
						</p>
						<p class="single-article__text">Vivamus finibus diam nec est ultricies tempus. Vestibulum nec dolor quis turpis porta
							lobortis.
							Nulla ex.</p>
						<div class="line-separate line-separate_offset"></div>
						<h2 class="single-article__title single-article__title_offset">What we offer?</h2>
						<ul class="single-article__list single-article__list_circle">
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

	<section class="section section__contact-us section__contact-us_bg">
		<div class="container">
			<div class="row">
				<div class="col-md-7 mx-auto px-4">
					<p class="contact-us-text mb-5">If you have a web-development need, contact us, we can help you
						resolve it</p>
					<a href="#" class="btn btn__default px-4">Contact Us</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section section_offset-y-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-7 mx-auto px-4">
					<h2 class="single-article__title single-article__title_offset-sm">Software Architecture Approach</h2>
					<p class="single-article__text">Our web product development life cycle has the following structure:</p>

					<div class="structure structure_offset">
						<div class="structure__item">
							<span class="structure__name">Initial Assessment</span>
						</div>
						<div class="structure__item">
							<span class="structure__name">Design</span>
							<div class="structure-desc structure-desc_offset">
								<p class="structure-desc__name mb-2">Discover</p>
								<p class="structure-desc__detail structure-desc__detail_border mb-2">
									<span>Functional</span>
									<span>Non-functional</span>
									<span>Transition requirements</span>
								</p>
								<p class="structure-desc__name mb-2">Define and validate</p>
								<p class="structure-desc__name">Design and test</p>
							</div>
						</div>
						<div class="structure__item">
							<span class="structure__name">Development</span>
							<div class="structure-desc structure-desc_offset">
								<p class="structure-desc__name mb-2">Develop</p>
								<p class="structure-desc__detail structure-desc__detail_border mb-2">
									<span>Architecture</span>
									<span>Backend (Microservices)</span>
									<span>Frontend</span>
								</p>
								<p class="structure-desc__name mb-2">Code quality</p>
								<p class="structure-desc__detail structure-desc__detail_border mb-2">
									<span>Sonar studies code analysis</span>
									<span>Code Style</span>
									<span>Metrics (Cognitive complexity)</span>
								</p>
								<p class="structure-desc__name mb-2">Automation Testing</p>
								<p class="structure-desc__detail structure-desc__detail_border mb-2">
									<span>Testing strategy (Test Pyramid - Unit test, API testing, Integration, E2E)</span>
									<span>Security and Vulnerability</span>
								</p>
								<p class="structure-desc__name mb-2">Deploy</p>
								<p class="structure-desc__detail structure-desc__detail_border">
									<span>Deployment Strategy (Cost-benefit analysis, On premises, IAAS PAAS SAAS)</span>
									<span>Envs(prod - stage UTM Prod)</span>
									<span>Gitflow(Features base, Envs)</span>
									<span>CI/CD pipeline(From initial stages of development with autotests to target environment deployment)</span>
								</p>
							</div>
						</div>
					</div>

					<img src="img/professional-team-programmer.jpg" class="img-fluid single-article__img single-article__img_offset" alt=""/>

					<h2 class="single-article__title single-article__title_offset-sm">Tools we use</h2>
					<p class="single-article__text mb-4">Our developers are working with a lot of tools, here are main that we are using from day to
						day</p>

					<div class="tools">
						<div class="tools__item">
							<h3 class="tools__name mb-2">Front-end</h3>
							<div class="tools__body row m-0">
								<span class="tools__label">Angular JS</span>
								<span class="tools__label">React JS</span>
								<span class="tools__label">Vue JS</span>
							</div>
						</div>
						<div class="tools__item">
							<h3 class="tools__name mb-2">Back-end</h3>
							<div class="tools__body row m-0">
								<span class="tools__label">Java</span>
								<span class="tools__label">PHP</span>
								<span class="tools__label">NodeJS</span>
								<span class="tools__label">.NET</span>
							</div>
						</div>
						<div class="tools__item">
							<h3 class="tools__name mb-2">Databases</h3>
							<div class="tools__body row m-0">
								<span class="tools__label">MySQL</span>
								<span class="tools__label">PostgreSQL</span>
								<span class="tools__label">MongDB</span>
								<span class="tools__label">Oracle</span>
								<span class="tools__label">Redis</span>
								<span class="tools__label">Elastic Search</span>
								<span class="tools__label">Influx data</span>
								<span class="tools__label">Amazon RDS</span>
								<span class="tools__label">Memcached</span>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
    @include('layouts._contact')
</main>
@include('layouts._footerIndex')

