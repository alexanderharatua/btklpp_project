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
    <div style="margin-top:10%">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Berita</h2>
        <br><br>
        <div class="container">
        <div class="row justify-content-center" style="margin-bottom:5%">
              <div class="col-md-4 col-sm-12 " >  
                    <div class="card" style="height:720px">
                        <div class="view overlay">
                          <img class="card-img-top" src="{{ asset('tes/img/portfolio/logicil.png')}}" style="width="200" height="300px"">
                        </div>
                        <div class="card-body" >
                            <h4 class="card-title" >
                                Penyampaian Pelaksanaan PP RI No.64 tahun 2019 tentang Jenis dan Tarif atas PNBP di Lingkup Kementerian Kesehatan RI</h4>
                            <hr>
                            <p>
                            Penyampaian Pelaksanaa di Lingkup Kementerian Kesehatan RI...
                            <br>
                            <i class="far fa-clock pr-1"></i>
                                    05/10/2015
                            </p>
                            <button type="button" class="btn btn-outline-success">Read More</button>
                           
                        </div>
                        
                    </div>
              </div>
              <br>
              <div class="col-md-4 col-sm-12">         
                <div class="card" style="height:720px" >
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ asset('tes/img/portfolio/lima.jpg')}}" alt="Card image cap" style="width="200px" height="300px"">
                    </div>
                    <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                                    Penyampaian Pelaksanaan PP RI No.64 tahun 2019 tentang Jenis dan Tarif atas PNBP di Lingkup Kementerian Kesehatan RI</h4>
                        <hr>
                        <p>
                          Penyampaian Pelaksanaa di Lingkup Kementerian Kesehatan RI...<br>
                           <i class="far fa-clock pr-1"></i>05/10/2015</p>
                          <button type="button" class="btn btn-outline-success">Read More</button>
                       
                    </div>
                </div>
              </div>
        </div>
@endsection
