@extends('layouts.adminmaster')

@section('content')
    <div class="card">
        <div class="card-header">{{ $data->judul_agenda }}</div>
        <div class="card-body"><?php echo $data->isi_agenda ?></div>
        <div class="card-footer"><img src="{{asset('/agenda/'.$data->gambar)}}" alt="" width="100px"></div>
    </div>
@endsection