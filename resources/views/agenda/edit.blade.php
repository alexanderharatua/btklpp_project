@extends('layouts.adminmaster')

@section('content')

        <form action="/admin/agenda/agendas/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <div class="form-group">
                <label for="name">Judul Agenda:</label>
                <input type="text" class="form-control" placeholder="Input judul agenda" name="judul_agenda" id="judul_agenda" value="{{$data->judul_agenda}}">
                <span class="text-danger">{{ $errors->first('judul_agenda') }}</span>
            </div>
                <div class="form-group">
                <label for="description">Isi Berita:</label>
                <textarea name="isi_agenda" id="summernote" placeholder="Tulis agenda" cols="100" rows="10">{{$data->isi_agenda}}</textarea>
                <span class="text-danger">{{ $errors->first('isi_agenda') }}</span>
            </div>
                    <div class="form-group">
                        <label class="col-md-4 text-right">Select File</label>
                            @if ($data->gambar)
                            <img id="original" src="{{asset('/agenda/'.$data->gambar)}}" height="70" width="70">
                            @endif
                            <input type="file" name="gambar" class="form-control" placeholder="" value="{{ $data->gambar }}">
                            <span class="text-danger">{{ $errors->first('gambar') }}</span>
                       </div>
                <button type="submit" class="btn btn-default">Update</button>
        </form>
@endsection