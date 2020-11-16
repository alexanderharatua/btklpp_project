@extends('layouts.master')

@section('content')
<section class="page-section" style="padding-bottom: 90px; margin-top:5%">
    <h4 class="text-center text-uppercase text-secondary mb-0">Download File</h4>
    <br><br>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Dokumen</th>
                    <th scope="col">Dokumen</th>
                    <th scope="col"><center>Action</center></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Dokumen 1</td>
                    <td>pdf</td>
                    <td>
                        <center>
                        <button type="button" class="btn btn-outline-danger">Download</button>
                        </center>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Dokumen 2</td>
                    <td>pdf</td>
                    <td>
                        <center>
                            <button type="button" class="btn btn-outline-danger">Download</button>
                        </center>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Dokumen</td>
                    <td>pdf</td>
                    <td>
                        <center>
                            <button type="button" class="btn btn-outline-danger">Download</button>
                        </center>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
   
</section>  
@endsection