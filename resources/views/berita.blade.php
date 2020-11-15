@extends('layouts.master')

@section('content')
    <br>
    <br>
    <br>
    <br>
 
<div class="col-md-6 col-lg-4 mb-5">
  
                <!-- Card -->
                <div class="card" >

                <!-- Card image -->
                <div class="view overlay">
                <img class="card-img-top" src="{{ asset('tes/img/portfolio/satu.jpg')}}" alt="Card image cap">
                <a>
                    <div class="mask rgba-white-slight"></div>
                </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i
                    class="fas fa-chevron-right pl-1"></i></a>

                <!-- Card content -->
                <div class="card-body">

                <!-- Title -->
                <h4 class="card-title">Berita 1</h4>
                <hr>
                <!-- Text -->
                <p class="card-text">Pelaksanaan Kegiatan latihan.</p>

</div>

<!-- Card footer -->
<div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
  <ul class="list-unstyled list-inline font-small">
    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
    <li class="list-inline-item pr-2"><a href="#" class="white-text">
  </ul>
</div>

</div>
<!-- Card -->
    
    
</div>
@endsection