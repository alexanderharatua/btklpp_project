@extends('layouts.adminmaster')
@section('content')

<a href="/admin/unduh/downloads/create" class="btn btn-primary mb-2">Tambahkan Pengumuman Baru</a>
<table id="example1" class="table table-bordered table-striped">
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
    <tr>
      <td>Loading...</td>
      <td>Loading...</td>
      <td>Loading...</td>
      <td>Loading...</td>
      <td>Loading...</td>
    </tr>
 
  </tbody>
  {{-- <tfoot>
  <tr>
    <th>Judul Berita</th>
    <th>Gambar</th>
    <th>Action</th>
  </tr>
  </tfoot> --}}
</table>

  
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  var table = $("#example1").DataTable({

       processing: true,
       serverSide: true,
       ajax: "/admin/unduh/tes/tes",
       columns: [
            {"data":"no"},
            {"data":"nama_dokumen"},
            {"data":"jenis_dokumen"},
            {"data":"file"},
            {
                            "data": 'action',
                            "name": 'action'
                        }
       ],
   });

</script>
@endsection