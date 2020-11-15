@extends('layouts.master')

@section('content')
<div class="container d-flex align-items-center flex-column">
    <br>
    <br>
    <section class="page-section portfolio" >
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Berita</h2>
        <br>
       <div class="row justify-content-center">
        <div class="card col-md-6 col-lg-4 mb-5" style="width: 15rem;">
            <div>
                 <img src="{{ asset('tes/img/portfolio/buletin_dbd.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Demam Berdarah</h5>
                      <p class="card-text">Demam Berdarah Dengue banyak ditemukan di daerah tropis dan sub-tropis. Data dari ...</p>
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
    
    
</div>
@endsection