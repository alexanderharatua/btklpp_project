@extends('layouts.adminmaster')

@section('page_title')
    BTKLPP MEDAN
@endsection

@section('content')
  
<form action="/admin/pengumuman/announcements" method="POST">
    @csrf
        <div class="form-group">
        <label for="name">No:</label>
        <input type="text" class="form-control" placeholder="Masukkan Nomor Pengumuman" name="no" id="no" required="required">
        </div>
        <div class="form-group col-md-2">
        <label for="description">Waktu:</label>
        <input type="date" class="form-control" placeholder="Waktu" name="waktu" id="waktu" required="required">
        </div>
        <div class="form-group">
            <label for="price">Kegiatan:</label>
            <input type="text" class="form-control" placeholder="Kegiatan" name="kegiatan" id="kegiatan" required="required">
            </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection