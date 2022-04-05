@extends('main')

@section('container')
<!-- ======= About Section ======= -->
<section class="jumbotron jumbotron-fluid mt-5">
    <div class="container">
        <h1 class="display-4"></h1>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>About Me</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="img/<?= $image; ?>" class="img-fluid rounded-circle shadow-lg img-thumbnail" alt="" />
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
                <h3 class="text-center bg-white py-2">Front End & Backend Pemula</h3>
                <p></p>
                <div class="row">
                    <div class="col-lg-12">
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td> : <b><{{ $nama2; }}</b></td>
                            </tr>
                            <tr>
                                <td>Nim</td>
                                <td> : <b>{{ $nim; }}</b></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td> : <b>{{ $umur; }}</b></td>
                            </tr>
                            <tr>
                                <td>Lahir</td>
                                <td> : <b>{{ $lahir; }}</b></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td> : <b>{{ $agama; }}</b></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td> : <b>{{ $status; }}</b></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td> : <b><?= $jk;?></b></td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td> : <b><?= $kwn;?></b></td>
                            </tr>
                            <tr>
                                <td>Kompetensi</td>
                                <td> : <b><?= $kompetensi;?></b></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->
</section>
<!-- ======= Skills Section ======= -->
<section id="skills" class="skills">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Skills</h2>
            <p>Adapun Skill-skill yang sudah dikuasai dan sedang dipelajari antara lain :</p>
        </div>
        <div class="row skills-content">
            <div class="col-lg-6">
                <div class="progress">
                    <span class="skill">HTML & CSS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">JavaScript <i class="val">70%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">Java <i class="val">74%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress">
                    <span class="skill">PHP <i class="val">80%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="progress">
                    <span class="skill">Python <i class="val">50%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress">
                    <span class="skill">Wondershare Filmora <i class="val">91%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="progress">
                    <span class="skill">Adobe Illustrator & Effect <i class="val">92%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill"> Microsoft Word , Point & Excel<i class="val">87%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Skills Section -->
@endsection