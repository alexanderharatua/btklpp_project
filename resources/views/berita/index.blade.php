@extends('layouts.adminmaster')
@section('content')
<a href="/admin/berita/news/create" class="btn btn-primary mb-2">Tambahkan Berita Baru</a>
<table class="table">
    <thead>
      <tr>
        <th>Judul Berita</th>
        <th>Isi Berita</th>
        <th>Gambar</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($news as $row)
            <tr>
                <td>{{$row->judul_berita}}</td>

                <td>{{$row->isi_berita}}</td>

                {{-- <td>{{$row->gambar}}</td> --}}
            <td> <img src="{{asset('/berita/'.$row->gambar)}}" alt="" width="100px"></td>

                <td>
                <a href="/admin/berita/news/{{ $row->id }}"> 
                  <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i>Show</button>
                </a>

                <a href="/admin/berita/news/{{ $row->id }}/edit"> 
                  <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Edit</button>
                </a>

                <form action="/admin/berita/news/{{$row->id}}" method="POST" style="display: inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" value="delete"><i class="fa fa-trash"></i>delete</button>
                </form>
                  </td>
             </tr>
        @endforeach
    </tbody>
  </table>
@endsection