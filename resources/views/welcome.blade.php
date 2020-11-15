<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="author" content="INSPIRO" />
<meta name="description" content="Themeforest Template Polo, html template">
<link rel="icon" type="image/png" href="images/favicon.png">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>BKTLPP - DINKES</title>
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

<link href="{{ asset('css/plugins.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
        <script>
                var msg = 'Keluhan sudah dikirim';
                var exist = '{{Session::has('alert')}}';
                if(exist){
                  alert(msg);
                }
              </script>
<div class="body-inner">

<header id="header" data-fullwidth="true" >
<div class="header-inner" style="background-color:#2b652b">
<div class="container">

<div id="logo">
<a href="#">
<span class="logo-default">BKTLPP - DINKES</span>
<span class="logo-dark">BKTLPP - DINKES</span>
</a> 
</div>


<!-- <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
<form class="search-form" action="search-results-page.html" method="get">
<input class="form-control" name="q" type="text" placeholder="Type & Search..." />
<span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
</form>
</div> -->



<div id="mainMenu-trigger">
<a class="lines-button x"><span class="lines"></span></a>
</div>


<div id="mainMenu">
<div class="container">
<nav>
<ul>
<li><a href="#">HOME</a></li>
<li class="dropdown"><a href="#">STRUKTUR</a>
<ul class="dropdown-menu">
<li class="dropdown-submenu"><a href="#">TATA USAHA</a>

</li>
<li class="dropdown-submenu"><a href="#">Main Menu<span class="badge badge-danger">NEW</span></a>

</li>
<li class="dropdown-submenu"><a href="#">Page Title</a>

</li>
<li class="dropdown-submenu"><a href="#">Page Menu<span class="badge badge-danger">NEW</span></a>
</ul>
</li>
<li class="dropdown"><a href="#">AGENDA</a>
</li>
<li class="dropdown mega-menu-item"><a href="#">ABOUT</a>
</li>
<li class="dropdown"><a href="#">CONTACT</a>
</li>
</ul>
</ul>
</nav>
</div>
</div>

</div>
</div>
</header> 

<section id="page-content" class="sidebar-right">
<div class="container">
<div class="row">

<div class="content col-lg-9">

<div class="page-title">
<h1>Selamat Datang</h1>
<div class="breadcrumb float-left">
<ul>
<li><a href="#">Home</a>
</li>
<li><a href="#">Blog</a>
</li>
<li class="active"><a href="#">Sidebar Right</a>
</li>
</ul>
</div>
</div>


<div id="blog">

<div class="post-item">
<div class="post-item-wrap">
<div class="post-image">
<a href="#">
<img alt="" src="images/blog/4.jpg">
</a>
<span class="post-meta-category"><a href="">Agenda</a></span>
</div>
<div class="post-item-description">
<span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2020</span>
<h2><a href="#">Kegiatan
</a></h2>
<p>Sebuah persiapan sebelum melakukan kegiatan.</p>
<a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
</div>
</div>
</div>


<div class="post-item">
<div class="post-item-wrap">
<div class="post-slider">
<div class="carousel dots-inside arrows-visible arrows-only" data-items="1" data-loop="true" data-autoplay="true" data-lightbox="gallery">
<a href="images/blog/2.jpg" data-lightbox="gallery-image">
<img alt="" src="images/blog/16.jpg">
 </a>
<a href="images/blog/2.jpg" data-lightbox="gallery-image">
<img alt="" src="images/blog/2.jpg">
</a>
</div>
<span class="post-meta-category"><a href="">Kegiatan</a></span>
</div>
<div class="post-item-description">
<span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
<span class="post-meta-category">Sosialisasi</span>
<h2>Kegiatan</h2>
<p>Sebuah persiapan sebelum melakukan kegiatan.</p>
<a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
</div>
</div>
</div>


<div class="sidebar sticky-sidebar col-lg-3">


<div class="widget " data-username="envato" data-limit="2">
        <form method="POST" action="/mails">
                @csrf
                <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="email" class="form-control" id="inputEmail4" placeholder="Email" type="email">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Name</label>
                <input name="nama" class="form-control" id="inputPassword4" placeholder="Name" type="text">
                </div>
                </div>
                <div class="form-group col-md-12">
                <label for="inputState">Jenis Pengaduan : </label>
                <select name="to" id="inputState" class="form-control">
                <option value="wbsbtklpp@gmail.com" selected="">WBS BTKLPP</option>
                <option value="gratifikasibtklpp@gmail.com" >Gratifikasi BTKLPP</option>
                <option value="benturankepentinganbtklpp@gmail.com" >Benturan Kepentingan BTKLPP</option>
                </select>
                </div>
                <label for="inputState">Isi pengaduan : </label>
                <textarea name="text" class="form-control" aria-label="With textarea"></textarea>
                <div class="form-group">
                
                </div>
                <button type="submit" class="btn">Send</button>
                </form>
</div>


<!-- <div class="widget  widget-tags">
<h4 class="widget-title">Tags</h4>
<div class="tags">
<a href="#">Design</a>
<a href="#">Portfolio</a>
<a href="#">Digital</a>
<a href="#">Branding</a>
<a href="#">HTML</a>
<a href="#">Clean</a>
<a href="#">Peace</a>
<a href="#">Love</a>
<a href="#">CSS3</a>
<a href="#">jQuery</a>
</div>
</div> -->


<div class="widget  widget-newsletter">
<form class="widget-subscribe-form" novalidate action="include/subscribe-form.php" role="form" method="post">
<h4 class="widget-title">Newsletter</h4>
<small>Stay informed on our latest news!</small>
<div class="input-group">
<input type="email" required name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
<span class="input-group-btn">
<button type="submit" id="widget-subscribe-submit-button" class="btn"><i class="fa fa-paper-plane"></i></button>
</span> </div>
</form>
</div>

</div>

</div>
</div>
</section> 

<footer id="footer">
<div class="footer-content">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="widget">
<div class="widget-title">Polo HTML5 Template</div>
 <p class="mb-5">Built with love in Fort Worth, Texas, USA<br>
All rights reserved. Copyright © 2019. INSPIRO.</p>
<a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-inverted" target="_blank">Purchase Now</a>
</div>
</div>
<div class="col-lg-7">
<div class="row">
<div class="col-lg-3">
<div class="widget">
<div class="widget-title">Discover</div>
<ul class="list">
<li><a href="#">Features</a></li>
<li><a href="#">Layouts</a></li>
<li><a href="#">Corporate</a></li>
<li><a href="#">Updates</a></li>
<li><a href="#">Pricing</a></li>
<li><a href="#">Customers</a></li>
</ul>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<div class="widget-title">Features</div>
<ul class="list">
<li><a href="#">Layouts</a></li>
<li><a href="#">Headers</a></li>
<li><a href="#">Widgets</a></li>
<li><a href="#">Footers</a></li>
</ul>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<div class="widget-title">Pages</div>
<ul class="list">
<li><a href="#">Portfolio</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Shop</a></li>
</ul>
</div>
</div>
<div class="col-lg-3">
<div class="widget">
<div class="widget-title">Support</div>
<ul class="list">
<li><a href="#">Help Desk</a></li>
<li><a href="#">Documentation</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="copyright-content">
<div class="container">
<div class="copyright-text text-center">&copy; 2019 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="//www.inspiro-media.com" target="_blank" rel="noopener"> INSPIRO</a> </div>
</div>
</div>
</footer>

</div>


<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/plugins.js')}}"></script>

<script src="{{ asset('js/functions.js')}}"></script>
</body>
</html>