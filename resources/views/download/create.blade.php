@extends('layouts.adminmaster')

@section('page_title')
    BTKLPP MEDAN
@endsection

@section('content')
  
<form action="/admin/unduh/downloads" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
        <label for="name">No:</label>
        <input type="text" class="form-control" placeholder="Masukkan Nomor Pengumuman" name="no" id="no">
        </div>
        <div class="form-group">
        <label for="description">Nama Dokumen:</label>
        <input type="text" class="form-control" placeholder="Nama Dokumen" name="nama_dokumen" id="nama_dokumen">
        </div>
        <div class="form-group">
            <label for="price">Jenis Dokumen:</label>
            <input type="text" class="form-control" placeholder="Kegiatan" name="jenis_dokumen" id="jenis_dokumen">
            </div>
            <div class="form-group">
                <label class="col-md-4 text-right">Select File</label>
                <div class="col-md-8">
                    <input type="file" name="file" />
                </div>
            </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection