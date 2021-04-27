@extends('layouts.adminmaster')

@section('content')

        

        <form action="/admin/berita/news/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="form-group">
                <label for="name">Judul Berita:</label>
                <input type="text" class="form-control" placeholder="Input judul berita" name="judul_berita" id="judul_berita" value="{{$data->judul_berita}}">
                <span class="text-danger">{{ $errors->first('judul_berita') }}</span>
            </div>
                <div class="form-group">
                <label for="description">Isi Berita:</label>
                <textarea name="isi_berita" id="summernote" placeholder="Tulis berita" cols="100" rows="10">{{$data->isi_berita}}</textarea>
                <span class="text-danger">{{ $errors->first('isi_berita') }}</span>
            </div>
                    <div class="form-group">
                        <label class="col-md-4 text-right">Select File</label>
                            @if ($data->gambar)
                            <img id="original" src="{{asset('/berita/'.$data->gambar)}}" height="70" width="70">
                            @endif
                            <input type="file" name="gambar" class="form-control" placeholder="" value="{{ $data->gambar }}">
                            <span class="text-danger">{{ $errors->first('gambar') }}</span>
                       </div>
                <button type="submit" class="btn btn-default">Update</button>
        </form>
@endsection