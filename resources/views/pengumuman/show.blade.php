@extends('layouts.adminmaster')

@section('content')
    <div class="card">
        <div class="card-header">{{ $announcements->no }}</div>
        <div class="card-body">{{ $announcements->waktu }}</div>
        <div class="card-footer">{{ $announcements->kegiatan }}</div>
    </div>
 
@endsection