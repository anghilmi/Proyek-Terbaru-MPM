@extends("page.layouts.template_user")

@section("page_content")

<main id="main" style="margin-top: 40px;">
	<!-- ======= About Us Section ======= -->
	<section id="tentang_kami" class="about">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Galeri</h2>
			</div>

			<div class="row content">
				@foreach($data_berita as $berita)
				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
				<div class="portfolio-img"><img src="{{ url('/storage/'.$berita->gambar) }}" class="img-fluid" alt=""></div>
					<div class="portfolio-info">
						<h4>Web 3</h4>
						<p>Web</p>
						<a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
						<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section><!-- End About Us Section -->

	<!-- ======= Contact Section ======= -->
	<section id="kontak" class="contact">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Kontak</h2>
				<p>
					Apabila ada yang ingin ditanyakan seputar <b>MPM POLINDRA</b>. Bisa menghubungi kontak di bawah ini.
				</p>
			</div>

			<div class="row">

				<div class="col-lg-5 d-flex align-items-stretch">
					<div class="info">
						<div class="address">
							<i class="bi bi-geo-alt"></i>
							<h4>Lokasi:</h4>
							<p>
								Jln. Lohbener lama No. 08 Kec. Lohbener Kab. Indramayu 45252
							</p>
						</div>

						<div class="email">
							<i class="bi bi-envelope"></i>
							<h4>Email:</h4>
							<p>mpmpolindra@gmail.com</p>
						</div>

						<div class="phone">
							<i class="bi bi-phone"></i>
							<h4>Telepon:</h4>
							<p>0853-1463-0396</p>
						</div>

						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
					</div>

				</div>

				<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
					<form action="{{ url('/tambah') }}" method="post" role="form" class="php-email-form">
						{{ csrf_field() }}
						<div class="row">
							<div class="form-group col-md-6">
								<label for="nama"> Nama </label>
								<input type="text" name="nama" class="form-control" id="nama" required placeholder="Masukkan Nama">
							</div>
							<div class="form-group col-md-6">
								<label for="email"> Emai </label>
								<input type="email" class="form-control" name="email" id="email" required placeholder="Masukkan Email">
							</div>
						</div>
						<div class="form-group">
							<label for="judul"> Judul </label>
							<input type="text" class="form-control" name="judul" id="judul" required placeholder="Masukkan Judul">
						</div>
						<div class="form-group">
							<label for="pesan"> Pesan </label>
							<textarea class="form-control" name="pesan" rows="10" required placeholder="Masukkan Pesan"></textarea>
						</div>
						<div class="text-center"><button type="submit">
							Kirim Pesan
						</button></div>
					</form>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection