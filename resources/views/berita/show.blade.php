@extends('layouts.adminmaster')

@section('content')
    <div class="card">
        <div class="card-header">{{ $data->judul_berita }}</div>
        <div class="card-body"><?php echo $data->isi_berita ?></div>
        <div class="card-footer"><img src="{{asset('/berita/'.$data->gambar)}}" alt="" width="100px"></div>
    </div>
@endsection