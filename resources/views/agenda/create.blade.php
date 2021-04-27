@extends('layouts.adminmaster')

@section('page_title')
    BTKLPP MEDAN
@endsection

@section('content')

@if (session('error'))
    <div class="alert alert-info alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Info!</strong>  {{ session('error') }}
      
    </div>
@endif
   
<form action="/admin/agenda/agendas" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
        <label for="name">Judul Agenda:</label>
        <input type="text" class="form-control" placeholder="Masukkan Judul Agenda" name="judul_agenda" id="judul_agenda" required="required">
        {{-- <span class="text-danger">{{ $errors->first('judul_agenda') }}</span> --}}
    </div>
        <div class="form-group">
        <label for="description">Isi Agenda:</label>
        <textarea name="isi_agenda" id="summernote" placeholder="Tulis Agenda" cols="100" rows="10"></textarea>
        {{-- <span class="text-danger">{{ $errors->first('isi_agenda') }}</span> --}}
    </div>
        <div class="form-group">
            <label for="price">Masukkan Gambar Agenda:</label>
            </div>
            <div class="form-group">
                <label class="col-md-4 text-right">Select File</label>
                <input type="file" name="gambar" class="form-control" id="gambar" placeholder="" required="required">
                {{-- <span class="text-danger">{{ $errors->first('gambar') }}</span> --}}
            </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection

