@extends('layouts.master')

@section('content')
    <div style="margin-top:10%">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Berita</h2>
    <br><br>
    <div class="row justify-content-center" style="margin-bottom:5%">
      <!-- Portfolio Item 1-->
      <div class="col-md-4" >         
          <!-- Card -->
          <div class="card" style="height:700px">

          <!-- Card image -->
          <div class="view overlay">
          <img class="card-img-top" src="{{ asset('tes/img/portfolio/logicil.png')}}" style="width="200" height="300px"">
          
          </div>

          <!-- Button -->
       
          <!-- Card content -->
          <div class="card-body" >

          <!-- Title -->
          <h4 class="card-title" >
            Penyampaian Pelaksanaan PP RI No.64 tahun 2019 tentang Jenis dan Tarif atas PNBP di Lingkup Kementerian Kesehatan RI</h4>
          <hr>
          <!-- Text -->
          <p class="card-text">
                Penyampaian Pelaksanaan PP RI No.64 tahun 2019 tentang Jenis dan Tarif atas PNBP di Lingkup Kementerian Kesehatan RI</p>
                <button type="button" class="btn btn-outline-success">Read More</button>
                <hr>
              
        </div>

        <!-- Card footer -->
        <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
        <ul class="list-unstyled list-inline font-small">
        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
        
        </ul>
     </div>
          </div>
      </div>
      <div class="col-md-4"  >         
        <!-- Card -->
        <div class="card" style="height:700px" >

        <!-- Card image -->
        <div class="view overlay">
        <img class="card-img-top" src="{{ asset('tes/img/portfolio/lima.jpg')}}" alt="Card image cap" style="width="200px" height="300px"">
       
        </div>

        <!-- Button -->
        <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"></a>

        <!-- Card content -->
        <div class="card-body">
            <h4 class="card-title">
                        Penyampaian Pelaksanaan PP RI No.64 tahun 2019 tentang Jenis dan Tarif atas PNBP di Lingkup Kementerian Kesehatan RI</h4>
                    <hr>
        <!-- Title -->
        <p class="card-text" >
          Penyampaian Pelaksanaa di Lingkup Kementerian Kesehatan RI...</p>
          <button type="button" class="btn btn-outline-success">Read More</button>
        <hr>
        
        <!-- Text -->
    
      </div>

      <!-- Card footer -->
      <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
      <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text">
      </ul>
   </div>
        </div>



                        
            

@endsection