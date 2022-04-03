@extends('main')

@section('container')
<!-- ======= Services Section ======= -->
<section id="services" class="services mt-4">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Education</h2>
      <p>Ringkasan Sekilas Tentang Pendidikan :</p>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">

        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div>
            <div class="card">
              <img src="img/tk.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $tk }}</h5>
                <p class="card-text">2007 - 2008</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div>
            <div class="card">
              <img src="img/sd-11-kota-bima.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $sd }}</h5>
                <p class="card-text">2009 - 2014</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div>
            <div class="card">
              <img src="img/smp1 sumbawa.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $smp }}</h5>
                <p class="card-text">2015 - 2016</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div>
            <div class="card">
              <img src="img/sma 4.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $sma }}</h5>
                <p class="card-text">2017 - 2019</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col" data-aos="zoom-in" data-aos-delay="100">
          <div>
            <div class="card">
              <img src="img/ubg.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $ubg }}</h5>
                <p class="card-text">2019 - SEKARANG</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- End Services Section -->
@endsection