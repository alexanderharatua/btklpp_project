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
        <textarea name="isi_berita" id="summernote" placeholder="Tulis berita" cols="100" rows="10"></textarea>
        {{-- <span class="text-danger">{{ $errors->first('isi_berita') }}</span> --}}
    </div>
        <div class="form-group">
            <label for="price">Masukkan Gambar Headline Berita:</label>
            </div>
            <div class="form-group">
                <label class="col-md-4 text-right">Select File</label>
                <input type="file" name="gambar" class="form-control" id="gambar" placeholder="">
                {{-- <span class="text-danger">{{ $errors->first('gambar') }}</span> --}}
            </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection

