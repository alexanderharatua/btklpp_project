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
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/berita') }}">Berita</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/download') }}">Download</a></li>
          </ul>
      </div>
  </div>
</nav>
@endsection

@section('content')
<section class="page-section" style="padding-bottom: 90px">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Whistleblowing system</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <img style="width:100px;height:100px;" src="{{ asset('tes/img/portfolio/wb.png') }}" alt="gambar logo" />
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form method="POST" action="/mails">
                    @csrf

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="inputEmail4">Email</label>
                            <input name="email" class="form-control" id="inputEmail4" placeholder="Email" type="email" required="required">
                            {{-- <input class="form-control" id="inputEmail4" type="email" placeholder="Alamat Email" required="required" /> --}}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label for="inputPassword4">Nama</label>
                            <input name="nama" class="form-control" id="inputPassword4" placeholder="Name" type="name" required="required" data-validation-required-message="Please enter your name.">
                            {{-- <input class="form-control" id="inputPassword4" type="text" placeholder="Nama" required="required" data-validation-required-message="Please enter your name." /> --}}
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group ">
                            <label>Jenis Pengaduan</label>
                            <select name="to" id="inputState" class="form-control">
                                <option value="wbsbtklppmdn@gmail.com" selected="">WBS BTKLPP</option>
                                <option value="gratifikasibtklpp@gmail.com" >Gratifikasi BTKLPP</option>
                                <option value="benturankepentinganbtklpp@gmail.com" >Benturan Kepentingan BTKLPP</option>
                                </select>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Isi Pengaduan : </label>
                            <textarea class="form-control" rows="5" placeholder="Isi pengaduan" name="isi" required="required" type="isi"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl"  type="submit">Kirim</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection