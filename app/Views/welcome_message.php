<?= $this->extend('template/layer') ?>

<?= $this->section('content') ?>
<!-- ======= Hero Section ======= -->
<section id="hero">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

		<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->

			<div class="carousel-item active" style="background-image: url(img/banner-polihasnur.jpg)">
				<!-- <div class="carousel-item active" style="background-image: url(img/Politeknik-Hasnur.jpg)"> -->
				<div class="carousel-container">
					<div class="container">
						<h2 class="animate__animated animate__fadeInDown">Selamat Datang di Website SPMI</h2>
						<h1 class="animate__animated animate__fadeInDown">Politeknik Hasnur</h1>
						<span class="animate__animated animate__fadeInUp">Stairs to the future</span>
						<p class="animate__animated animate__fadeInUp"></p>
						<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
					</div>
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="carousel-item" style="background-image: url(img/gedung_polihasnur.jpg)">
				<div class="carousel-container">
					<div class="container">
						<h2 class="animate__animated animate__fadeInDown">4 Program Study Unggulan</h2>
						<h1 class="animate__animated animate__fadeInDown">Politeknik Hasnur</h1>
						<!-- <span class="animate__animated animate__fadeInUp"></span> -->
						<p class="animate__animated animate__fadeInUp">Kami terus berkembang dan memberikan pengajaran terbaik untuk kemajuan banua dan bangsa</p>
						<a href="#featured-services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
					</div>
				</div>
			</div>

			<!-- Slide 3 -->
			<!-- <div class="carousel-item" style="background-image: url(img/banner-polihasnur.jpg)">
				<div class="carousel-container">
					<div class="container">
						<h2 class="animate__animated animate__fadeInDown">Selamat Datang di Website SPMI</h2>
						<h1 class="animate__animated animate__fadeInDown">Politeknik Hasnur</h1>
						<span class="animate__animated animate__fadeInUp">Stairs to the future</span>
						<p class="animate__animated animate__fadeInUp"></p>
						<a href="#featured-services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
					</div>
				</div>
			</div> -->

		</div>

		<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
		</a>

		<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
		</a>

	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= Featured Services Section ======= -->
	<section id="featured-services" class="featured-services section-bg">
		<div class="container">

			<div class="section-title">
				<h2>PUSAT STUDY</h2>
				<!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
			</div>

			<div class="row no-gutters">
				<div class="col-lg-4 col-md-6">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-code"></i></div>
						<h1 class="title"><a href="">Pusat Study Teknologi Informasi</a></h1>
						<p class="description">Provinsi Kalimantan Selatan memiliki potensi industri baik dari sektor perkebunan maupun pertambangan, selain itu pemerintah daerah juga mendukung pengembangan teknologi informasi dan komunikasi pada bidang administrasi dan pemasaran produk dari masyarakat. Pusat Studi Informatika Politeknik Hasnur berperan aktif pada pengembangan pendidikan, penelitian, dan pengabdian kepada masyarakat. Program pusat studi ini adalah melaksanakan riset dari interdisiplin ilmu mulai dari database sampai implementasinya serta melakukan riset yang bersifat pendidikan dengan output-outcome yang dimanfaatkan oleh masyarakat dan stakeholder.</p>
						<h1 class="kaki"><a href="">Lingkup bagian yang dikaji :</a></h1>
						<ol class="description">
							<li>Antrian Online</li>
							<li>E-Commerce</li>
							<li>Infografis</li>
							<li>E-Goverment</li>
						</ol>

					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-briefcase"></i></div>
						<h4 class="title"><a href="">Dolor Sitema</a></h4>
						<p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="icon-box">
						<div class="icon"><i class="bi bi-calendar4-week"></i></div>
						<h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
						<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trade stravi</p>
					</div>
				</div>
			</div>

		</div>
	</section><!-- End Featured Services Section -->

	<!-- ======= About Us Section ======= -->
	<section id="about" class="about">
		<div class="container">

			<div class="section-title">
				<h2>About Us</h2>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>

			<div class="row">
				<div class="col-lg-6 order-1 order-lg-2">
					<img src="assets/img/about.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
					<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
					<p class="fst-italic">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.
					</p>
					<ul>
						<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
						<li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
						<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
					</ul>
					<p>
						Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
						velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
						culpa qui officia deserunt mollit anim id est laborum
					</p>
				</div>
			</div>

		</div>
	</section><!-- End About Us Section -->
</main><!-- End #main -->
<?= $this->endSection() ?>