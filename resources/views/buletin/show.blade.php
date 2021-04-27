@extends('layouts.adminmaster')

@section('content')
    <div class="card">
        <div class="card-header">{{ $data->judul_buletin }}</div>
        <div class="card-body"><?php echo $data->isi_buletin ?></div>
        <div class="card-footer"><img src="{{asset('/buletin/'.$data->gambar)}}" alt="" width="100px"></div>
    </div>
@endsection