@extends('layouts.adminmaster')

@section('content')

        <form action="/admin/pengumuman/announcements/{{$announcements->id}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                <label for="name">No:</label>
                <input type="text" class="form-control" placeholder="Input No" name="no" id="no" value="{{$announcements->no}}">
                </div>
                <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" placeholder="Waktu" name="waktu" id="waktu" value="{{$announcements->waktu}}">
                </div>
                <div class="form-group">
                    <label for="price">Kegiatan:</label>
                <input type="text" class="form-control" placeholder="Kegiatan" name="kegiatan" id="kegiatan" value="{{$announcements->kegiatan}}">
                    </div>
                <button type="submit" class="btn btn-default">Update</button>
            </form>

@endsection