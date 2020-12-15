@extends('layouts.adminmaster')
@section('content')
<a href="/admin/pengumuman/announcements/create" class="btn btn-primary mb-2">Tambahkan Pengumuman Baru</a>
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Kegiatan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($announcements as $announcement)
            <tr>
                <td>{{$announcement->no}}</td>

                <td>{{$announcement->waktu}}</td>

                <td>{{$announcement->kegiatan}}</td>


                <td>
                <a href="/admin/pengumuman/announcements/{{ $announcement->id }}"> 
                  <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i>Show</button>
                </a>

                <a href="/admin/pengumuman/announcements/{{ $announcement->id }}/edit"> 
                  <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Edit</button>
                </a>

                <form action="/admin/pengumuman/announcements/{{$announcement->id}}" method="POST" style="display: inline">
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