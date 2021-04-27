@extends('layouts.adminmaster')

@section('content')

        

        <form action="/admin/buletin/buletins/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="form-group">
                <label for="name">Judul Buletin:</label>
                <input type="text" class="form-control" placeholder="Input judul buletin" name="judul_buletin" id="judul_buletin" value="{{$data->judul_buletin}}">
                <span class="text-danger">{{ $errors->first('judul_buletin') }}</span>
            </div>
                <div class="form-group">
                <label for="description">Isi Buletin:</label>
                <textarea name="isi_buletin" id="summernote" placeholder="Tulis berita" cols="100" rows="10">{{$data->isi_buletin}}</textarea>
                <span class="text-danger">{{ $errors->first('isi_buletin') }}</span>
            </div>
                    <div class="form-group">
                        <label class="col-md-4 text-right">Select File</label>
                            @if ($data->gambar)
                            <img id="original" src="{{asset('/buletin/'.$data->gambar)}}" height="70" width="70">
                            @endif
                            <input type="file" name="gambar" class="form-control" placeholder="" value="{{ $data->gambar }}">
                            <span class="text-danger">{{ $errors->first('gambar') }}</span>
                       </div>
                <button type="submit" class="btn btn-default">Update</button>
        </form>
@endsection