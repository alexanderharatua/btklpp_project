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

                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/index') }}">Agenda</a></li>
                  <li class="nav-item dropdown mx-0 mx-lg-1">
                        <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
    <div class="container d-flex align-items-center flex-column">
    
    <div class="alert alert-info" style="margin:10%">
            <strong>Info!</strong> 
            <h3>
                under construction
                </h3>
               
               
    </div>
   
</div
@endsection