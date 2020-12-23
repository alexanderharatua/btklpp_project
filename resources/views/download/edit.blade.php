@extends('layouts.adminmaster')

@section('content')

        <form action="/admin/unduh/downloads/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="form-group">
                <label for="name">No:</label>
                <input type="text" class="form-control" placeholder="Input No" name="no" id="no" value="{{$data->no}}">
                </div>
                <div class="form-group">
                <label for="description">Nama Dokumen:</label>
                <input type="text" class="form-control" placeholder="Nama Dokumen" name="nama_dokumen" id="nama_dokumen" value="{{$data->nama_dokumen}}">
                </div>
                <div class="form-group">
                    <label for="price">Jenis Dokumen:</label>
                <input type="text" class="form-control" placeholder="Jenis Dokumen" name="jenis_dokumen" id="jenis_dokumen" value="{{$data->jenis_dokumen}}">
                </div>
                    <div class="form-group">
                        <label class="col-md-4 text-right">Select File</label>
                        <div class="col-md-8">
                            <input type="file" name="file" id="file" value="{{$data->file}}">     
                        </div>
                    </div>
                <button type="submit" class="btn btn-default">Update</button>
            </form>

@endsection