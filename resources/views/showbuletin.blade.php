@extends('layouts.master')

@section('navbar')
<nav class="navbar navbar-expand-lg bg-info text-uppercase fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="{{ url('/index') }}"><img src="{{ asset('/tes/img/portfolio/logicil.png') }}" height="25px" width="25px"></a>
      <a class="navbar-brand js-scroll-trigger" href="{{ url('/index') }}">BTKLPP - Medan</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown mx-0 mx-lg-1">
                  <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Struktur
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/tatausaha') }}">Tata Usaha</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/surveilans') }}">SE (SURVEILANS EPIDOMOLOGI)</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/adkl') }}">ADKL</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/ptl') }}">PTL</a>
                  </div>
                </li>

                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/index') }}">Agenda</a></li>
                <li class="nav-item dropdown mx-0 mx-lg-1">
                      <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Profile
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a  href="{{ url('/visimisi') }}" class="dropdown-item ">
                                  Visi & Misi
                              </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/wilayahkerja') }}">Wilayah Kerja</a>
                      </div>
                </li>

                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ url('/index') }}">Buletin</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/kabarberita') }}">Berita</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/download') }}">Download</a></li>
          </ul>
      </div>
  </div>
</nav>
@endsection

@section('content')
  <div class="container" style="margin-top:10%">
  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Buletin</h2>
    <div class="row"> 
    <div class="col-lg-12">

              <!-- Title -->
              <h1 class="mt-4" style="text-align:center">{{ $buletins->judul_buletin }}</h1>
              <hr>

              <!-- Date/Time -->
              <!-- <p>Posted on January 1, 2019 at 12:00 PM</p> -->

              <hr>

              <!-- Preview Image -->
              <img class="img-fluid rounded mx-auto d-block" style="width:300px" src="{{ asset('/buletin/'.$buletins->gambar) }}" alt="">

              <hr>

              <!-- Post Content -->
              <p class="lead">{{ $buletins->judul_buletin }}</p>

              <p><?php echo $buletins->isi_buletin ?></p>

              <hr>



                </div>
              </div>

              </div>
    </div>
  </div>

<!-- <div style="margin-top:10%">
  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Berita</h2>
  <br><br>
  <div class="container">
    <div class="col-lg-10 col-md-10 mx-auto">
      <h2 style="text-align: center">{{ $buletins->judul_buletin }}</h2><br>
      <img class="center" src="{{ asset('/buletin/'.$buletins->gambar) }}" style= "width:70%; height:10%;text-align:center;">

      <div>
        <p style="text-align: center"> <?php echo $buletins->isi_buletin ?></p>
      </div>
        </div><br>
    </div>
</div> -->
@endsection