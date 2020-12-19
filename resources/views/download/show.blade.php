@extends('layouts.adminmaster')

@section('content')
    <div class="card">
        <div class="card-header">{{ $data->no }}</div>
        <div class="card-body">{{ $data->nama_dokumen }}</div>
        <div class="card-footer">{{ $data->jenis_dokumen }}</div>
        <div class="card-footer">{{ $data->file }}</div>
    </div>
 
@endsection