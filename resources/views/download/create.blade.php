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
  
<form action="/admin/unduh/downloads" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group"> 
        <label for="name">No:</label>
        <input type="text" class="form-control" placeholder="Masukkan Nomor Pengumuman" name="no" id="no" required="required">
        </div>
        <div class="form-group">
        <label for="description">Nama Dokumen:</label>
        <input type="text" class="form-control" placeholder="Nama Dokumen" name="nama_dokumen" id="nama_dokumen" required="required">
        </div>
        <div class="form-group">
            <label for="price">Jenis Dokumen:</label>
            <input type="text" class="form-control" placeholder="Jenis Dokumen" name="jenis_dokumen" id="jenis_dokumen" required="required">
            </div>
            <div class="form-group">
                <label class="col-md-4 text-right">Select File</label>
                <div class="col-md-8">
                    <input type="file" name="file" required="required"/>
                </div>
            </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection