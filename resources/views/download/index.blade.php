@extends('layouts.adminmaster')
@section('content')
<a href="/admin/unduh/downloads/create" class="btn btn-primary mb-2">Tambahkan Pengumuman Baru</a>
<table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Dokumen</th>
        <th>Jenis Dokumen</th>
        <th>File</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                <td>{{$row->no}}</td>

                <td>{{$row->nama_dokumen}}</td>

                <td>{{$row->jenis_dokumen}}</td>

                <td>{{$row->file}}</td>
                <td>
                <a href="/admin/unduh/downloads/{{ $row->id }}"> 
                  <button class="btn btn-info btn-sm"><i class="fas fa-eye"></i>Show</button>
                </a>

                <a href="/admin/unduh/downloads/{{ $row->id }}/edit"> 
                  <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Edit</button>
                </a>

                <form action="/admin/unduh/downloads/{{$row->id}}" method="POST" style="display: inline">
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