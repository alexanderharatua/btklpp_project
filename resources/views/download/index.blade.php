@extends('layouts.adminmaster')
@section('content')

@if (session('success'))
    <div class="alert alert-info alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Info!</strong>  {{ session('success') }}
      
    </div>
@endif


<a href="/admin/unduh/downloads/create" class="btn btn-primary mb-2">Tambahkan Download Baru</a>
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
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>
<script type="text/javascript">
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
                            "name": 'action',
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
                url: "/admin/unduh/downloads/destroy/" + tes, //eksekusi ajax ke url ini
                type: 'GET',
                beforeSend: function () {
                    $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
                },
                success: function (data) { //jika sukses
                  $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                       location.reload(); //reload data geng
                }
            })
        });
</script>
@endsection
