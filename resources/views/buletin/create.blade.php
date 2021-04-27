@extends('layouts.adminmaster')

@section('page_title')
    BTKLPP MEDAN
@endsection

@section('content')
@if (session('success'))
    <div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Info!</strong>  {{ session('success') }}
      
    </div>
@endif
   
<form action="/admin/buletin/buletins" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
        <label for="name">Judul Buletin:</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul Buletin" name="judul_buletin" id="judul_buletin" required="required">
        {{-- <span class="text-danger">{{ $errors->first('judul_berita') }}</span> --}}
    </div>
        <div class="form-group">
        <label for="description">Isi Buletin:</label>
        <textarea name="isi_buletin" id="summernote" placeholder="Tulis buletin" cols="100" rows="10" required="required"></textarea>
        {{-- <span class="text-danger">{{ $errors->first('isi_berita') }}</span> --}}
    </div>
        <div class="form-group">
            <label for="price">Masukkan Gambar Buletin:</label>
            </div>
            <div class="form-group">
                <label class="col-md-4 text-right">Select File</label>
                <input type="file" name="gambar" class="form-control" id="gambar" placeholder="" required="required">
                {{-- <span class="text-danger">{{ $errors->first('gambar') }}</span> --}}
            </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection

