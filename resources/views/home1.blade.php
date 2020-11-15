@extends('layouts.master')

@section('content')
       <!-- Masthead-->
       <header class="bg-primary text-black text-center" style="padding-top: 80px">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">SELAMAT DATANG</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <h1 class="masthead-subheading font-weight-light mb-0">Balai Teknik Kesehatan Lingkungan dan Pengendalian Penyakit (BTKLPP) 
                Medan</h1>
        

        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Agenda</h2>
            <!-- Icon Divider-->    
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('tes/img/portfolio/satu.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('tes/img/portfolio/dua.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('tes/img/portfolio/tiga.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('tes/img/portfolio/gambar.jpg')}}" alt="" />
                    </div>
                </div>  
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{asset('tes/img/portfolio/empat.jpg')}}" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="tes/img/portfolio/lima.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto"><p class="lead">Kegiatan Balai Teknik Kesehatan Lingkungan Pengendalian Penyakit (BTKL-PP) Kesehatan
                     mencakup tiga aspek yaitu aspek kegiatan kesehatan, aspek lingkungan dan aspek regional.</p></div>
                <div class="col-lg-4 mr-auto"><p class="lead">VISI:
                    Masyarakat sehat yang mandiri dan berkeadilan.
                </p></div>
            </div>
            <!-- About Section Button-->
            
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section portfolio" id="contact">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Buletin</h2>
        <br>
       <div class="row justify-content-center">
        <div class="card col-md-6 col-lg-4 mb-5" style="width: 15rem;">
            <div>
                 <img src="{{ asset('tes/img/portfolio/buletin_dbd.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Demam Berdarah</h5>
                      <p class="card-text">Demam Berdarah Dengue banyak ditemukan di daerah tropis dan sub-tropis. Data dari...
                        </span></p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>                      
                  </div>
            </div>
        </div>
        <div class="card col-md-6 col-lg-4 mb-5" style="width: 15rem;">
            <div>
                <img src="{{ asset('tes/img/portfolio/buletin_pnu.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Pneumonia</h5>
                      <p class="card-text">Pneumonia adalah penyakit infeksi menular yang merupakan penyebab utama kematian pada balita di dunia...</p>
                      <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
             </div>
        </div>
     </div>
       
    </section>

    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"> Whistleblowing system</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <a href="{{ url('/wbs') }}">
                <img style="width:100px;height:100px;" src="{{ asset('tes/img/portfolio/wb.png') }}" alt="gambar logo" />
            </a>

        </div>
        <!-- Contact Section Form-->

        {{-- link terkait --}}
        <section class="page-section portfolio" id="contact">
            <h2 class=" text-center text-uppercase text-secondary mb-0">Link Terkait</h2>
            <br>
           <div class="row justify-content-center">
            <div class="card" style="width: 5rem;">
                <a href="http://monev.anggaran.kemenkeu.go.id/smart/">
                    <img class="card-img-top" src="{{ asset('tes/img/logolink/smart.png') }}" alt="">
                </a>
               
            </div>
            <div class="card" style="width: 5rem;">
                <a href="https://spanint.kemenkeu.go.id/spanint/latest/app/">
                    <img class="card-img-top" src="{{ asset('tes/img/logolink/span.png') }}" alt="">
                </a>
                
         </div>
         <div class="card" style="width: 5rem;">
            <a href="https://www.bappenas.go.id/id/">
                <img class="card-img-top" src="{{ asset('tes/img/logolink/ppn.png') }}" alt="">
            </a>
     </div>
         <div class="card" style="width: 5rem;">
        <a href="https://lpse.lkpp.go.id/eproc4">
            <img class="card-img-top" src="{{ asset('tes/img/logolink/lpse.png') }}" alt="">
        </a>
    </div>
       <div class="card" style="width: 5rem ;">
        <a href="https://e-rekon-lk.kemenkeu.go.id/login">
            <img class="card-img-top" src="{{ asset('tes/img/logolink/erekon.jpg') }}" alt="">
       </a>
    </div>
       <div class="card" style="width: 5rem height: 5rem;">
        <a href="https://ropeg.kemkes.go.id/">
            <img class="card-img-top" src="{{ asset('tes/img/logolink/biro.png') }}" alt="">
        </a>
    </div>
     </section>

    </div>

   
@endsection