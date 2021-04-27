@extends('layouts.adminmaster')
@section('content')
@if (session('success'))
    <div class="alert alert-info alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Info!</strong>  {{ session('success') }}
      
    </div>
@endif
<a href="/admin/pengumuman/announcements/create" class="btn btn-primary mb-2">Tambahkan Pengumuman Baru</a>
<table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Kegiatan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        {{-- @foreach ($announcements as $announcement) --}}
            <tr>
                <td>Loading...</td>
                <td>Loading...</td>
                <td>Loading...</td>
                <td>Loading...</td>
             </tr>
    </tbody>
  </table>
   <!-- MULAI MODAL KONFIRMASI DELETE-->

 <div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">PERHATIAN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <p><b>Jika menghapus File maka</b></p>
              <p>*data file tersebut hilang selamanya, apakah anda yakin?</p>
          </div>
          <div class="modal-footer bg-whitesmoke br">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Hapus
                  Data</button>
          </div>
      </div>
  </div>
</div>

<!-- AKHIR MODAL -->
  
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
   var table = $("#example1").DataTable({

        pageLength: 25,
        processing: true,
        serverSide: true,
        ajax: "/admin/pengumuman/annc",
        columns: [
            {"data":"no"},
            {"data":"waktu"},
            {"data":"kegiatan"},
            {
                            "data": 'action',
                            "name": 'action'
                          }
       ],
    });


    $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });


   //jika klik class delete (yang ada pada tombol delete) maka tampilkan modal konfirmasi hapus maka
   $(document).on('click', '.delete', function () {
            tes = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });
        //jika tombol hapus pada modal konfirmasi di klik maka
        $('#tombol-hapus').click(function () {
            $.ajax({
                url: "/admin/pengumuman/announcements/destroy/" + tes, //eksekusi ajax ke url ini
                type: 'GET',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                      $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                       location.reload();
                }
            })
        });
</script>
@endsection