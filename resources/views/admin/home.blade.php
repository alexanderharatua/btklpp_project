{{-- @extends('layouts.app') --}}
@extends('layouts.adminmaster')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/admin/pengumuman/announcements"> 
                        <!-- <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Pengumuman</button> -->
                        <button type="button" class="btn btn-outline-primary btn-lg btn-block"><i class="fas fa-eye"></i> Pengumuman</button>
                      </a>
                      <br>
                      <a href="/admin/unduh/downloads"> 
                        <!-- <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Download</button> -->
                        <button type="button" class="btn btn-outline-warning btn-lg btn-block"><i class="fas fa-download"></i> Download</button>
                      </a>
                    <br>
                      <a href="/admin/berita/news"> 
                        <!-- <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Beritaaa</button> -->
                        <button type="button" class="btn btn-outline-success btn-lg btn-block"><i class="fas fa-pen"></i> Berita</button>
                      </a>
                      <br>
                      <a href="/admin/agenda/agendas"> 
                        <!-- <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Beritaaa</button> -->
                        <button type="button" class="btn btn-outline-success btn-lg btn-block"><i class="fas fa-pen"></i> Agenda</button>
                      </a>
                      <br>
                      <a href="/admin/buletin/buletins"> 
                        <!-- <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i> Beritaaa</button> -->
                        <button type="button" class="btn btn-outline-info btn-lg btn-block"><i class="fas fa-pen"></i> Buletin</button>
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
