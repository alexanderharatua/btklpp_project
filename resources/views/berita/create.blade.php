@extends('layouts.adminmaster')

@section('page_title')
    BTKLPP MEDAN
@endsection

@section('content')
   
<form action="/admin/berita/news" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
        <label for="name">Judul Berita:</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul Berita" name="judul_berita" id="judul_berita">
        {{-- <span class="text-danger">{{ $errors->first('judul_berita') }}</span> --}}
    </div>
        <div class="form-group">
        <label for="description">Isi Berita:</label>
        <textarea class="form-control" col="4" name="isi_berita" id="isi_berita" placeholder="Enter Description"></textarea>
        {{-- <span class="text-danger">{{ $errors->first('isi_berita') }}</span> --}}
    </div>
        <div class="form-group">
            <label for="price">Masukkan Gambar:</label>
            </div>
            <div class="form-group">
                <label class="col-md-4 text-right">Select File</label>
                <input type="file" name="gambar" class="form-control" id="gambar" placeholder="">
                {{-- <span class="text-danger">{{ $errors->first('gambar') }}</span> --}}
            </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection