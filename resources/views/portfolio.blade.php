@extends('main')

@section('container')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio mt-4">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Portfolio</h2>
      <p>"Selalu Belajar Hal Baru dan Jangan remehkan keuntungan kecil yang kamu hasilkan dari bisnis, karena lebih banyak bisnis yang berjalan lancar dan sukses dari keuntungan kecil".</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter=".filter-card">Jualan & Hasil Belajar</li>
          <li data-filter=".filter-web">Seminar & Album Foto</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/ukm 1.JPG" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/seminar1.JPG" class="img-fluid" alt="" />
          <div class="portfolio-info">
            <p>Seminar One Day Informatics 2021</p>
            <div class="portfolio-links">
              <a href="img/seminar1.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Seminar One Day Informatics"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/ukm 2.JPG" class="img-fluid" alt="" />
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/ukm 3.jpg" class="img-fluid" alt="" />
        </div>
      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/Ukm 4.jpg" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/belajar-Php.png" class="img-fluid" alt="" />
          <div class="portfolio-info">
            <p>Belajar Php</p>
            <div class="portfolio-links">
              <a href="img/belajar-Php.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Belajar CRUD di Youtube"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/ukm 5.jpg" class="img-fluid" alt="" />
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/Hary Cell..png" class="img-fluid" alt="" />
          <div class="portfolio-info">
            <p>Jual Pulsa & Alat Tulis Kantor</p>
            <div class="portfolio-links">
              <a href="img/Hary Cell..png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Berjualan Pulsa & Alat tulis Kantor sejak 2019 Menjadi Pengalaman saya dibidang Provider & Stationary"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="img/ukm 6.JPG" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Portfolio Section -->
@endsection