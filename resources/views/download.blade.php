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
<section class="page-section" style="padding-bottom: 90px; margin-top:5%">
    <h4 class="text-center text-uppercase text-secondary mb-0">Download File</h4>
    <br><br>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Dokumen</th>
                    <th scope="col">Dokumen</th>
                    <th scope="col"><center>Action</center></th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                    <th scope="row">1</th>
                    <td>Tarif pengujian sampel di laboratorium BTKLPP Kelas I Medan</td>
                    <td>xls</td>
                    <td>
                        <center>
                          <a href="{{ asset('/tes/img/file/tarifbaru.xlsx') }}" target="_blank"><button type="button" class="btn btn-outline-danger">Download </button></a> 
                        </center>
                    </td>
                  </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Laporan Hasil Survei Kepuasan Pelangan</td>
                    <td>pdf</td>
                    <td>
                        <center>
                          <a href="{{ asset('/tes/img/file/KEPUASAN PELANGGAN 202019112020.pdf') }}" target="_blank"><button type="button" class="btn btn-outline-danger">Download </button></a> 
                        </center>
                    </td>
                  </tr>
                   <tr>
                    <th scope="row">3</th>
                    <td>Undang-Undang No. 36 Tahun 2009 Tentang Kesehatan</td>
                    <td>pdf</td>
                    <td>
                        <center>
                          <a href="{{ asset('/tes/img/file/uukesehatan.pdf') }}" target="_blank"><button type="button" class="btn btn-outline-danger">Download </button></a> 
                        </center>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Undang-Undang No. 36 Tahun 2014 Tentang Tenaga Kesehatan</td>
                    <td>pdf</td>
                    <td>
                        <center>
                          <a href="{{ asset('/tes/img/file/uu36kesehatan.pdf') }}" target="_blank"><button type="button" class="btn btn-outline-danger">Download </button></a> 
                        </center>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Undang-undang Nomor 25 Tahun 2009 Tentang Pelayanan Publik</td>
                    <td>pdf</td>
                    <td>
                        <center>
                          <a href="{{ asset('/tes/img/file/undangpublik.pdf') }}" target="_blank"><button type="button" class="btn btn-outline-danger">Download </button></a> 
                        </center>
                    </td>
                  </tr>

                </tbody>
              </table>
        </div>
    </div>
   
</section>  
@endsection