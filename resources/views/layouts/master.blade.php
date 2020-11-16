<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BTKLPP Medan</title>
        <!-- Favicon-->
        <link rel="icon" href="{{ asset('/tes/img/portfolio/logicil.png') }}" />
        <!-- Font Awesome icons (free ve rsion)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <script>
            var msg = 'Keluhan sudah dikirim';
            var exist = '{{Session::has('alert')}}';
            if(exist){
              alert(msg);
            }
          </script>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-info text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ url('/index') }}">BTKLPP - Medan</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown mx-0 mx-lg-1">
                            <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Struktur
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a  href="#" class="dropdown-item ">
                                        Tata Usaha
                                    </a>
                             
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">SE (SURVEILANS EPIDOMOLOGI)</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">ADKL</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">PTL</a>
                            </div>
                          </li>

                          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Agenda</a></li>
                          <li class="nav-item dropdown mx-0 mx-lg-1">
                                <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        About
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a  href="#" class="dropdown-item ">
                                            profile
                                        </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Visi & Misi</a>
                                </div>
                          </li>

                          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Buletin</a></li>
                          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/berita') }}">Berita</a></li>
                          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                          <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/download') }}">Download</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
            <div>
                <br>
            </div>

   
        <!-- Konten Here-->
            <section>
                @yield('content')
            </section>
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                        
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">BTKLPP Kelas I Medan</h4>
                        <p class="lead mb-0">
                            Jalan K.H. Wahid Hasyim 15 Medan 20154
                            Telp. (061) 4512305, Fax (061) 4521053
                            <br />
                            Sumatera Utara
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                    
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0470538948475!2d98.65513911457738!3d3.57665859739721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fd43553ce49%3A0xa2b9768876f7de81!2sBTKLPP%20KELAS%201%20MEDAN!5e0!3m2!1sid!2sid!4v1605447650745!5m2!1sid!2sid" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Email BTKLPP</h4>
                        <p class="lead mb-0">
                            btklppmmmdn@yahoo.co.id
                            
                        
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © btklpp 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>



        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('/tes/mail/jqBootstrapValidation.js') }}"></script>
        
        <script src="{{ asset('/tes/mail/contact_me.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('/js/scripts.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.js') }}"></script>
        
    </body>
</html>
